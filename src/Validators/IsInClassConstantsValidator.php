<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\ClassConstantsToArrayUniDirectionalConverter;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
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
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	private function getClassConstantsValues(): array
	{
		if (
			false === isset( $this->classConstantsValues )
		)
		{
			try
			{
				$this->classConstantsValues = new ClassConstantsToArrayUniDirectionalConverter()->convert( $this->className );
			}
			catch ( InvalidTypeExceptionInterface | InvalidValueExceptionInterface | UnexpectedErrorExceptionInterface $throwable )
			{
				throw UnexpectedErrorException::withPreviousCatchedThrowable( $throwable );
			}
		}

		return $this->classConstantsValues;
	}

	/**
	 * @inheritdoc
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
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
