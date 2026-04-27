<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting the constants of a `nullable interface` into a `nullable array` of corresponding key value pairs.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableInterfaceConstantsToNullableArrayUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts the constants of a `nullable interface` into a `nullable array` of corresponding key value pairs.
	 * @param mixed $value The name of the `nullable interface` whose constants has to be converted.
	 * @return ?array The converted `nullable array` of corresponding key value pairs.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convert( mixed $value ): ?array;
}
