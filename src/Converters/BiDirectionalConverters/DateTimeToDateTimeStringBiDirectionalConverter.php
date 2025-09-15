<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\DateTimeStringToDateTimeUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\DateTimeToDateTimeStringUniDirectionalConverter;
use DateTime;
use DateTimeZone;
use Override;

/**
 * Represents a bidirectional converter converting a `DateTime` value into its corresponding `DateTime string` value depending on a given format - and vice versa.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeToDateTimeStringBiDirectionalConverter extends AbstractDateTimeRelatedBiDirectionalConverter implements DateTimeToDateTimeStringBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 * @param string $format The format of the timestamp string.
	 * @param ?DateTimeZone $timeZone The time zone of the timestamp.
	 */
	public function __construct( string $format, ?DateTimeZone $timeZone = null )
	{
		parent::__construct(
			$format,
			$timeZone,
			new DateTimeToDateTimeStringUniDirectionalConverter( $format, $timeZone ),
			new DateTimeStringToDateTimeUniDirectionalConverter( $format, $timeZone )
		);
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convertTo( mixed $value ): string
	{
		return parent::convertTo( $value );
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): DateTime
	{
		return parent::convertFrom( $value );
	}
}
