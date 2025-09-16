<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\DateTimeRelatedConverterInterface;
use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional `DateTime` related converter.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface UniDirectionalDateTimeRelatedConverterInterface extends UniDirectionalConverterInterface, DateTimeRelatedConverterInterface
{
	/**
	 * Converts a value.
	 * @param mixed $value The value which has to be converted.
	 * @return mixed The converted value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): mixed;
}
