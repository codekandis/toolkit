<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\ToolKit\Validators\IsNullValidator;
use CodeKandis\ToolKit\Validators\IsStringValidator;
use Override;

/**
 * Represents a unidirectional converter converting a `nullable string` value matching {@link ValidValues::$nullString} into a value matching {@link ValidValues::$null}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableNullStringToNullUniDirectionalConverter extends AbstractConverter implements NullableNullStringToNullUniDirectionalConverterInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convert( mixed $value ): null
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

		if ( $this->validValues->nullString !== $value )
		{
			throw $this->getInvalidValueException( $value, $this->validValues->nullString );
		}

		return $this->validValues->null;
	}
}
