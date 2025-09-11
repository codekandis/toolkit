<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bidirectional converter converting a `boolean integer string` value matching the regular expression {@link ValidValues::$regExBooleanIntegerString} into its corresponding `boolean` value equal to {@link ValidValues::$booleanFalse} or {@link ValidValues::$booleanTrue} - and vice versa.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface BooleanIntegerStringToBooleanBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from a `boolean integer string` value matching the regular expression {@link ValidValues::$regExBooleanIntegerString} into its corresponding `boolean` value equal to {@link ValidValues::$booleanFalse} or {@link ValidValues::$booleanTrue}.
	 * @param string $value The `boolean integer string` value which has to be converted.
	 * @return bool The converted `boolean` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertTo( mixed $value ): bool;

	/**
	 * Converts from a `boolean` value equal to {@link ValidValues::$booleanFalse} or {@link ValidValues::$booleanTrue} into its corresponding `boolean integer string` value matching the regular expression {@link ValidValues::$regExBooleanIntegerString}.
	 * @param bool $value The `boolean` value which has to be converted.
	 * @return string The converted `boolean integer string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): string;
}
