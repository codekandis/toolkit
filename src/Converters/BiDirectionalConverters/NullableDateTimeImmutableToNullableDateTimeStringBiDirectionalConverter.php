<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter;
use DateTimeImmutable;
use DateTimeZone;
use Override;

/**
 * Represents a bidirectional converter converting a `nullable DateTimeImmutable` value into its corresponding `nullable DateTime string` value depending on a given format - and vice versa.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter extends AbstractDateTimeRelatedBiDirectionalConverter implements NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverterInterface
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
			new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( $format, $timeZone ),
			new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format, $timeZone )
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
	public function convertFrom( mixed $value ): ?DateTimeImmutable
	{
		return parent::convertFrom( $value );
	}
}
