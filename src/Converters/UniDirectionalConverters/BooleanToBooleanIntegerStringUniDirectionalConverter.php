<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\ToolKit\Validators\IsBooleanValidator;
use Override;

/**
 * Represents a unidirectional converter converting a `boolean` value equal to {@link ValidValues::$booleanFalse} or {@link ValidValues::$booleanTrue} into its corresponding `boolean integer string` value matching the regular expression {@link ValidValues::$regExBooleanIntegerString}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class BooleanToBooleanIntegerStringUniDirectionalConverter extends AbstractConverter implements BooleanToBooleanIntegerStringUniDirectionalConverterInterface
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
			? $this->validValues->booleanIntegerStringFalse
			: $this->validValues->booleanIntegerStringTrue;
	}
}
