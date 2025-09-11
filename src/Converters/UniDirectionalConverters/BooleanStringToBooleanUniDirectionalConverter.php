<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\ToolKit\Validators\IsMatchingRegularExpressionValidator;
use CodeKandis\ToolKit\Validators\IsStringValidator;
use Override;

/**
 * Represents a unidirectional converter converting a `boolean string` value matching the regular expression {@link ValidValues::$regExBooleanString} into its corresponding `boolean` value equal to {@link ValidValues::$booleanFalse} or {@link ValidValues::$booleanTrue}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class BooleanStringToBooleanUniDirectionalConverter extends AbstractConverter implements BooleanStringToBooleanUniDirectionalConverterInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convert( mixed $value ): bool
	{
		if (
			false === new IsStringValidator()
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, $this->expectedTypes->string );
		}

		if (
			false === new IsMatchingRegularExpressionValidator( $this->validValues->regExBooleanString )
				->validate( $value )
		)
		{
			throw $this->getInvalidValueException( $value, $this->validValues->regExBooleanString );
		}

		return $this->validValues->booleanStringTrue === $value;
	}
}
