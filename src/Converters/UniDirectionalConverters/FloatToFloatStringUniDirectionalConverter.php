<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\ToolKit\Validators\IsFloatValidator;
use Override;

/**
 * Represents a unidirectional converter converting a `float` value into its corresponding `float string` value matching the regular expression {@link ValidValues::$regExFloatString}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class FloatToFloatStringUniDirectionalConverter extends AbstractConverter implements FloatToFloatStringUniDirectionalConverterInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convert( mixed $value ): string
	{
		if (
			false === new IsFloatValidator()
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, $this->expectedTypes->float );
		}

		return (string) $value;
	}
}
