<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting an `integer` value into its corresponding `integer string` value matching the regular expression {@link ValidValues::$regExIntegerString}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface IntegerToIntegerStringUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from an `integer` value into its corresponding `integer string` value matching the regular expression {@link ValidValues::$regExIntegerString}.
	 * @param int $value The `integer` value which has to be converted.
	 * @return string The converted `integer` string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): string;
}
