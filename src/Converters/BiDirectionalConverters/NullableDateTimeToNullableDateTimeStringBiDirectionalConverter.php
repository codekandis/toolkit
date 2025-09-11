<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeToNullableDateTimeStringUniDirectionalConverter;
use DateTime;
use DateTimeZone;
use Override;

/**
 * Represents a bidirectional converter converting a `nullable DateTime` value into its corresponding `nullable DateTime string` value depending on a given format - and vice versa.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableDateTimeToNullableDateTimeStringBiDirectionalConverter extends AbstractDateTimeRelatedBiDirectionalConverter implements NullableDateTimeToNullableDateTimeStringBiDirectionalConverterInterface
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
			new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( $format, $timeZone ),
			new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( $format, $timeZone )
		);
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convertTo( mixed $value ): ?string
	{
		return parent::convertTo( $value );
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): ?DateTime
	{
		return parent::convertFrom( $value );
	}
}
