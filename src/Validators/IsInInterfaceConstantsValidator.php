<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\InterfaceConstantsToArrayUniDirectionalConverter;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;
use function in_array;

/**
 * Represents a validator validating if a specific value is representing any constant of a specific interface.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsInInterfaceConstantsValidator extends AbstractInterfaceNameRelatedValidator implements IsInInterfaceConstantsValidatorInterface
{
	/**
	 * Stores the constants values of the managed interface.
	 * @var array
	 */
	private array $interfaceConstantsValues;

	/**
	 * Gets the constants values of the managed interface.
	 * @return array The constants values of the managed interface.
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	private function getInterfaceConstantsValues(): array
	{
		if (
			false === isset( $this->interfaceConstantsValues )
		)
		{
			try
			{
				$this->interfaceConstantsValues = new InterfaceConstantsToArrayUniDirectionalConverter()->convert( $this->interfaceName );
			}
			catch ( InvalidTypeExceptionInterface | InvalidValueExceptionInterface | UnexpectedErrorExceptionInterface $throwable )
			{
				throw UnexpectedErrorException::withPreviousCatchedThrowable( $throwable );
			}
		}

		return $this->interfaceConstantsValues;
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
			$this->getInterfaceConstantsValues(),
			true
		);
	}
}
