<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter;
use DateTimeImmutable;
use DateTimeZone;
use Override;

/**
 * Represents a bidirectional converter converting a `nullable DateTime string` value into its corresponding `nullable DateTimeImmutable` value depending on a given format - and vice versa.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter extends AbstractDateTimeRelatedBiDirectionalConverter implements NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverterInterface
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
			new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format, $timeZone ),
			new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( $format, $timeZone )
		);
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convertTo( mixed $value ): ?DateTimeImmutable
	{
		return parent::convertTo( $value );
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): ?string
	{
		return parent::convertFrom( $value );
	}
}
