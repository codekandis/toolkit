<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter;
use Override;
use function in_array;

/**
 * Represents a validator validating if a specific value is of type `integer` or `string` representing a value of a specific `backed enum`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsInBackedEnumValuesValidator extends AbstractBackedEnumNameRelatedValidator implements IsInBackedEnumValuesValidatorInterface
{
	/**
	 * Stores the values of the managed backed enum.
	 * @var int[]|string[]
	 */
	private array $enumValues;

	/**
	 * Gets the values of the managed backed enum.
	 * @return int[]|string[] The values of the managed backed enum.
	 */
	private function getEnumValues(): array
	{
		if (
			false === isset( $this->enumValues )
		)
		{
			/** @noinspection PhpUnhandledExceptionInspection */
			$this->enumValues = new BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter()->convert( $this->backedEnumName );
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
