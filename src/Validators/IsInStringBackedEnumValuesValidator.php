<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
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
				$this->enumValues = new StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter()->convert( $this->stringBackedEnumName );
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
