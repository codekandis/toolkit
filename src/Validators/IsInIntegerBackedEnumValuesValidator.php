<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter;
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
	 */
	private function getEnumValues(): array
	{
		if (
			false === isset( $this->enumValues )
		)
		{
			/** @noinspection PhpUnhandledExceptionInspection */
			$this->enumValues = new IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter()->convert( $this->integerBackedEnumName );
		}

		return $this->enumValues;
	}

	/**
	 * @inheritdoc
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
