<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;
use function in_array;

/**
 * Represents a validator validating if a specific value is of type `integer` representing a value of a specific `integer backed enum`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsInIntegerBackedEnumValuesValidator extends AbstractIntegerBackedEnumNameRelatedValidator implements IsInIntegerBackedEnumValuesValidatorInterface
{
	/**
	 * Stores the values of the managed integer backed enum.
	 * @var int[]
	 */
	private array $enumValues;

	/**
	 * Gets the values of the managed integer backed enum.
	 * @return int[] The values of the managed integer backed enum.
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	private function getEnumValues(): array
	{
		if (
			false === isset( $this->enumValues )
		)
		{
			try
			{
				$this->enumValues = new IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter()->convert( $this->integerBackedEnumName );
			}
			catch ( InvalidTypeExceptionInterface | InvalidValueExceptionInterface $throwable )
			{
				throw UnexpectedErrorException::withPreviousCatchedThrowable( $throwable );
			}
		}

		return $this->enumValues;
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
			$this->getEnumValues(),
			true
		);
	}
}
