<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter;
use Override;
use function in_array;

/**
 * Represents a validator validating if a specific value is of type `string` representing a value of a specific `string backed enum`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsInStringBackedEnumValuesValidator extends AbstractStringBackedEnumNameRelatedValidator implements IsInStringBackedEnumValuesValidatorInterface
{
	/**
	 * Stores the values of the managed string backed enum.
	 * @var string[]
	 */
	private array $enumValues;

	/**
	 * Gets the values of the managed string backed enum.
	 * @return string[] The values of the managed string backed enum.
	 */
	private function getEnumValues(): array
	{
		if (
			false === isset( $this->enumValues )
		)
		{
			/** @noinspection PhpUnhandledExceptionInspection */
			$this->enumValues = new StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter()->convert( $this->stringBackedEnumName );
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
