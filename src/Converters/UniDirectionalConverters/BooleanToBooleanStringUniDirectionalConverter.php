<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\ToolKit\Validators\IsBooleanValidator;
use Override;

/**
 * Represents a unidirectional converter converting a `boolean` value equal to {@link ValidValues::$booleanFalse} or {@link ValidValues::$booleanTrue} into its corresponding `boolean string` value matching the regular expression {@link ValidValues::$regExBooleanString}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class BooleanToBooleanStringUniDirectionalConverter extends AbstractConverter implements BooleanToBooleanStringUniDirectionalConverterInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convert( mixed $value ): string
	{
		if (
			false === new IsBooleanValidator()
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, $this->expectedTypes->boolean );
		}

		return $this->validValues->booleanFalse === $value
			? $this->validValues->booleanStringFalse
			: $this->validValues->booleanStringTrue;
	}
}
