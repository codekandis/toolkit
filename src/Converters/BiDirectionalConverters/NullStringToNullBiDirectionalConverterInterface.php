<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bidirectional converter converting a `string` value equal to {@link ValidValues::$nullString} into a value equal to {@link ValidValues::$null} - and vice versa.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullStringToNullBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from a `string` value equal to {@link ValidValues::$nullString} into a value equal to {@link ValidValues::$null}.
	 * @param string $value The `string` value which has to be converted.
	 * @return null The converted `null` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertTo( mixed $value ): null;

	/**
	 * Converts from a value equal to {@link ValidValues::$null} into a `string` value equal to {@link ValidValues::$nullString}.
	 * @param null $value The `null` value which has to be converted.
	 * @return string The converted `string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): string;
}
