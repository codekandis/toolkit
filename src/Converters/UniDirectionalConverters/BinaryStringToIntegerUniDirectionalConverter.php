<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\ToolKit\RegularExpressions\InvalidRegularExpressionException;
use CodeKandis\ToolKit\Validators\IsMatchingRegularExpressionValidator;
use CodeKandis\ToolKit\Validators\IsStringValidator;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;
use function bindec;

/**
 * Represents a unidirectional converter converting a `binary string` value matching the regular expression {@link ValidValues::$regExBinaryString} into its corresponding `integer` value.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class BinaryStringToIntegerUniDirectionalConverter extends AbstractConverter implements BinaryStringToIntegerUniDirectionalConverterInterface
{
	/**
	 * @inheritdoc
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	#[Override]
	public function convert( mixed $value ): int
	{
		if (
			false === new IsStringValidator()
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, $this->expectedTypes->string );
		}

		try
		{
			if (
				false === new IsMatchingRegularExpressionValidator( $this->validValues->regExBinaryString )
					->validate( $value )
			)
			{
				throw $this->getInvalidValueException( $value, $this->validValues->regExBinaryString );
			}
		}
		catch ( InvalidRegularExpressionException $throwable )
		{
			throw UnexpectedErrorException::withPreviousCatchedThrowable( $throwable );
		}

		return bindec( $value );
	}
}
