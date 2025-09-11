<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\ToolKit\Validators\IsMatchingRegularExpressionValidator;
use CodeKandis\ToolKit\Validators\IsNullValidator;
use CodeKandis\ToolKit\Validators\IsStringValidator;
use Override;

/**
 * Represents a unidirectional converter converting a `nullable boolean string` value matching the regular expression {@link ValidValues::$regExBooleanString} into its corresponding `nullable boolean` value equal to {@link ValidValues::$booleanFalse} or {@link ValidValues::$booleanTrue}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBooleanStringToNullableBooleanUniDirectionalConverter extends AbstractConverter implements NullableBooleanStringToNullableBooleanUniDirectionalConverterInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convert( mixed $value ): ?bool
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

		$validator = new IsMatchingRegularExpressionValidator( $this->validValues->regExBooleanString );

		if (
			false === $validator->validate( $value )
		)
		{
			throw $this->getInvalidValueException( $value, $this->validValues->regExBooleanString );
		}

		return $this->validValues->booleanStringTrue === $value;
	}
}
