<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\InterfaceOrClassConstantsToArrayUniDirectionalConverter;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
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
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	private function getInterfaceOrClassConstantsValues(): array
	{
		if (
			false === isset( $this->interfaceOrClassConstantsValues )
		)
		{
			try
			{
				$this->interfaceOrClassConstantsValues = new InterfaceOrClassConstantsToArrayUniDirectionalConverter()->convert( $this->interfaceOrClassName );
			}
			catch ( InvalidTypeExceptionInterface | InvalidValueExceptionInterface | UnexpectedErrorExceptionInterface $throwable )
			{
				throw UnexpectedErrorException::withPreviousCatchedThrowable( $throwable );
			}
		}

		return $this->interfaceOrClassConstantsValues;
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
			$this->getInterfaceOrClassConstantsValues(),
			true
		);
	}
}
