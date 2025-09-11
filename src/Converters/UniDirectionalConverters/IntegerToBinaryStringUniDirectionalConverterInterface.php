<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting an `integer` value into its corresponding `binary string` value matching the regular expression {@link ValidValues::$regExBinaryString}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface IntegerToBinaryStringUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from an `integer` value into its corresponding `binary string` value matching the regular expression {@link ValidValues::$regExBinaryString}.
	 * @param int $value The `integer` value which has to be converted.
	 * @return string The converted `binary string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): string;
}
