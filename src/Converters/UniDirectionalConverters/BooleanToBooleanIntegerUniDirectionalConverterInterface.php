<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a `boolean` value equal to {@link ValidValues::$booleanFalse} or {@link ValidValues::$booleanTrue} into its corresponding `boolean integer` value equal to {@link ValidValues::$booleanIntegerFalse} or {@link ValidValues::$booleanIntegerTrue}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface BooleanToBooleanIntegerUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a `boolean` value equal to {@link ValidValues::$booleanFalse} or {@link ValidValues::$booleanTrue} into its corresponding `boolean integer` value equal to {@link ValidValues::$booleanIntegerFalse} or {@link ValidValues::$booleanIntegerTrue}.
	 * @param bool $value The `boolean` value which has to be converted.
	 * @return int The converted `boolean integer` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): int;
}
