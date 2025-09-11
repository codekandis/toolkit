<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\ToolKit\Validators\IsNullValidator;
use Override;

/**
 * Represents a unidirectional converter converting a value equal to {@link ValidValues::$null} into a `string` value equal to {@link ValidValues::$nullString}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullToNullStringUniDirectionalConverter extends AbstractConverter implements NullToNullStringUniDirectionalConverterInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convert( mixed $value ): string
	{
		if (
			false === new IsNullValidator()
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, $this->expectedTypes->null );
		}

		return $this->validValues->nullString;
	}
}
