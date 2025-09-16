<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters;

use DateTimeZone;

/**
 * Represents the base class of any `DateTime` related converter.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractDateTimeRelatedConverter extends AbstractConverter implements DateTimeRelatedConverterInterface
{
	/**
	 * @inheritdoc
	 */
	public string $format {
		get => $this->format;
	}

	/**
	 * @inheritdoc
	 */
	public ?DateTimeZone $timeZone {
		get => $this->timeZone;
	}

	/**
	 * Constructor method.
	 * @param string $format The format of the timestamp string.
	 * @param ?DateTimeZone $timeZone The time zone of the timestamp.
	 */
	public function __construct( string $format, ?DateTimeZone $timeZone = null )
	{
		$this->format   = $format;
		$this->timeZone = $timeZone;
	}
}
