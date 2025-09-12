<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters;

use DateTimeZone;

/**
 * Represents the interface of any `DateTime` related converter.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface DateTimeRelatedConverterInterface extends ConverterInterface
{
	/**
	 * Gets the format of the timestamp string.
	 * @var string
	 */
	public string $format {
		get;
	}

	/**
	 * Gets the time zone of the timestamp.
	 * @var ?DateTimeZone
	 */
	public ?DateTimeZone $timeZone {
		get;
	}
}
