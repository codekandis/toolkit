<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a `string` value equal to {@link ValidValues::$nullString} into a value equal to {@link ValidValues::$null}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullStringToNullUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a `string` value equal to {@link ValidValues::$nullString} into a value equal to {@link ValidValues::$null}.
	 * @param string $value The `string` value which has to be converted.
	 * @return null The converted `null` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convert( mixed $value ): null;
}
