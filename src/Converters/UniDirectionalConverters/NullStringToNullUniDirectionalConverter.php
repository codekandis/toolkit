<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\ToolKit\Validators\IsStringValidator;
use Override;

/**
 * Represents a unidirectional converter converting a `string` value equal to {@link ValidValues::$nullString} into a value equal to {@link ValidValues::$null}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullStringToNullUniDirectionalConverter extends AbstractConverter implements NullStringToNullUniDirectionalConverterInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convert( mixed $value ): null
	{
		if (
			false === new IsStringValidator()
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, $this->expectedTypes->string );
		}

		if ( $this->validValues->nullString !== $value )
		{
			throw $this->getInvalidValueException( $value, $this->validValues->nullString );
		}

		return $this->validValues->null;
	}
}
