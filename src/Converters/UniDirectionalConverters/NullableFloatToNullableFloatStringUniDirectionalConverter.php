<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\ToolKit\Validators\IsFloatValidator;
use CodeKandis\ToolKit\Validators\IsNullValidator;
use Override;

/**
 * Represents a unidirectional converter converting a `nullable float` value into its corresponding `nullable float string` value matching the regular expression {@link ValidValues::$regExFloatString}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableFloatToNullableFloatStringUniDirectionalConverter extends AbstractConverter implements NullableFloatToNullableFloatStringUniDirectionalConverterInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convert( mixed $value ): ?string
	{
		if (
			true === new IsNullValidator()
				->validate( $value )
		)
		{
			return $this->validValues->null;
		}

		if (
			false === new IsFloatValidator()
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, $this->expectedTypes->nullableFloat );
		}

		return (string) $value;
	}
}
