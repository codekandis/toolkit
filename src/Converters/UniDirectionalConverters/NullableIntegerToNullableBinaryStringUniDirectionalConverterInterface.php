<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a `nullable integer` value into its corresponding `nullable binary string` value matching the regular expression {@link ValidValues::$regExBinaryString}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableIntegerToNullableBinaryStringUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a `nullable integer` value into its corresponding `nullable binary string` value matching the regular expression {@link ValidValues::$regExBinaryString}.
	 * @param ?int $value The `nullable integer` value which has to be converted.
	 * @return ?string The converted `nullable binary string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): ?string;
}
