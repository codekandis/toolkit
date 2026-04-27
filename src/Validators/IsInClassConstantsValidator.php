<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\ClassConstantsToArrayUniDirectionalConverter;
use Override;
use function in_array;

/**
 * Represents a validator validating if a specific value is representing any constant of a specific class.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsInClassConstantsValidator extends AbstractClassNameRelatedValidator implements IsInClassConstantsValidatorInterface
{
	/**
	 * Stores the constants values of the managed class.
	 * @var array
	 */
	private array $classConstantsValues;

	/**
	 * Gets the constants values of the managed class.
	 * @return array The constants values of the managed class.
	 */
	private function getClassConstantsValues(): array
	{
		if (
			false === isset( $this->classConstantsValues )
		)
		{
			/** @noinspection PhpUnhandledExceptionInspection */
			$this->classConstantsValues = new ClassConstantsToArrayUniDirectionalConverter()->convert( $this->className );
		}

		return $this->classConstantsValues;
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return in_array(
			$value,
			$this->getClassConstantsValues(),
			true
		);
	}
}
