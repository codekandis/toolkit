<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bidirectional converter converting an `integer` value into its corresponding `integer string` value matching the regular expression {@link ValidValues::$regExIntegerString} - and vice versa.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface IntegerToIntegerStringBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from an `integer` value into its corresponding `integer string` value matching the regular expression {@link ValidValues::$regExIntegerString}.
	 * @param int $value The `integer` value which has to be converted.
	 * @return string The converted `integer` string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertTo( mixed $value ): string;

	/**
	 * Converts from an `integer string` value matching the regular expression {@link ValidValues::$regExIntegerString} into its corresponding `integer` value.
	 * @param string $value The `integer string` value which has to be converted.
	 * @return int The converted `integer` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): int;
}
