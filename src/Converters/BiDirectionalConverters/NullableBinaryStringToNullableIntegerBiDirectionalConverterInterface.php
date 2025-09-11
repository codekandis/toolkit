<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bidirectional converter converting a `nullable binary string` value matching the regular expression {@link ValidValues::$regExBinaryString} into its corresponding `nullable integer` value - and vice versa.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableBinaryStringToNullableIntegerBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from a `nullable binary string` value matching the regular expression {@link ValidValues::$regExBinaryString} into its corresponding `nullable integer` value.
	 * @param ?string $value The `nullable binary string` value which has to be converted.
	 * @return ?int The converted `nullable integer` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertTo( mixed $value ): ?int;

	/**
	 * Converts from a `nullable integer` value into its corresponding `nullable binary string` value matching the regular expression {@link ValidValues::$regExBinaryString}.
	 * @param ?int $value The `nullable integer` value which has to be converted.
	 * @return ?string The converted `nullable binary string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): ?string;
}
