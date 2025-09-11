<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a `nullable enum` into a `nullable array` of corresponding stringified keys.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableEnumValuesToNullableKeysArrayUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts a `nullable enum` into a `nullable array` of corresponding stringified keys.
	 * @param ?string $value The name of the `nullable enum` which has to be converted.
	 * @return ?array The converted `nullable array` of corresponding stringified keys.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convert( mixed $value ): ?array;
}
