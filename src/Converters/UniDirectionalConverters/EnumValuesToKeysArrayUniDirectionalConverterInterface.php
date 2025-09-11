<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting an `enum` into an `array` of corresponding keys.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface EnumValuesToKeysArrayUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts an `enum` into an `array` of corresponding keys.
	 * @param string $value The name of the `enum` which has to be converted.
	 * @return array The converted `array` of corresponding stringified keys.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convert( mixed $value ): array;
}
