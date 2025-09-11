<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\InterfaceOrClassConstantsToArrayUniDirectionalConverter;
use Override;
use function in_array;

/**
 * Represents a validator validating if a specific value is representing any constant of a specific interface or class.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsInInterfaceOrClassConstantsValidator extends AbstractInterfaceOrClassNameRelatedValidator implements IsInInterfaceOrClassConstantsValidatorInterface
{
	/**
	 * Stores the constants values of the managed interface or class.
	 * @var array
	 */
	private array $interfaceOrClassConstantsValues;

	/**
	 * Gets the constants values of the managed interface or class.
	 * @return array The constants values of the managed interface or class.
	 */
	private function getInterfaceOrClassConstantsValues(): array
	{
		if (
			false === isset( $this->interfaceOrClassConstantsValues )
		)
		{
			/** @noinspection PhpUnhandledExceptionInspection */
			$this->interfaceOrClassConstantsValues = new InterfaceOrClassConstantsToArrayUniDirectionalConverter()->convert( $this->interfaceOrClassName );
		}

		return $this->interfaceOrClassConstantsValues;
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return in_array(
			$value,
			$this->getInterfaceOrClassConstantsValues(),
			true
		);
	}
}
