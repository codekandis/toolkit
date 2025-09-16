<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\ToolKit\RegularExpressions\InvalidRegularExpressionException;
use CodeKandis\ToolKit\Validators\IsMatchingRegularExpressionValidator;
use CodeKandis\ToolKit\Validators\IsNullValidator;
use CodeKandis\ToolKit\Validators\IsStringValidator;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;

/**
 * Represents a unidirectional converter converting a `nullable integer string` value matching the regular expression {@link ValidValues::$regExIntegerString} into its corresponding `nullable integer` value.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIntegerStringToNullableIntegerUniDirectionalConverter extends AbstractConverter implements NullableIntegerStringToNullableIntegerUniDirectionalConverterInterface
{
	/**
	 * @inheritdoc
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	#[Override]
	public function convert( mixed $value ): ?int
	{
		if (
			true === new IsNullValidator()
				->validate( $value )
		)
		{
			return $this->validValues->null;
		}

		if (
			false === new IsStringValidator()
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, $this->expectedTypes->nullableString );
		}

		try
		{
			$validator = new IsMatchingRegularExpressionValidator( $this->validValues->regExIntegerString );
		}
		catch ( InvalidRegularExpressionException $throwable )
		{
			throw UnexpectedErrorException::withPreviousCatchedThrowable( $throwable );
		}

		if (
			false === $validator->validate( $value )
		)
		{
			throw $this->getInvalidValueException( $value, $this->validValues->regExIntegerString );
		}

		return (int) $value;
	}
}
