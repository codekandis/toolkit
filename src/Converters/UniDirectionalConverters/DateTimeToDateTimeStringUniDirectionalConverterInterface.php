<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use DateTime;

/**
 * Represents the interface of any unidirectional converter converting a `DateTime` value into its corresponding `DateTime string` value depending on a given format.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface DateTimeToDateTimeStringUniDirectionalConverterInterface extends UniDirectionalDateTimeRelatedConverterInterface
{
	/**
	 * Converts from a `DateTime` value into its corresponding `DateTime string` value depending on a given format.
	 * @param DateTime $value The `DateTime` value which has to be converted.
	 * @return string The converted `DateTime string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): string;
}
