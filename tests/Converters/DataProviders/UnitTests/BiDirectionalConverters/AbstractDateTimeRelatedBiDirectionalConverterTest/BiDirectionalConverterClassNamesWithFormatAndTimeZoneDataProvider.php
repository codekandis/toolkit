<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\BiDirectionalConverters\AbstractDateTimeRelatedBiDirectionalConverterTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeImmutableToDateTimeStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeStringToDateTimeBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeStringToDateTimeImmutableBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeToDateTimeStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeStringToNullableDateTimeBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeToNullableDateTimeStringBiDirectionalConverter;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing `DateTime` related bidirectional converter class names with format and time zone.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class BiDirectionalConverterClassNamesWithFormatAndTimeZoneDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'biDirectionalConverterClassName' => DateTimeImmutableToDateTimeStringBiDirectionalConverter::class,
				'format'                          => Values::DATE_TIME_FORMAT,
				'timeZone'                        => Values::NULL
			],
			1  => [
				'biDirectionalConverterClassName' => DateTimeImmutableToDateTimeStringBiDirectionalConverter::class,
				'format'                          => Values::DATE_TIME_FORMAT,
				'timeZone'                        => Values::createDateTimeZoneObject()
			],
			2  => [
				'biDirectionalConverterClassName' => DateTimeStringToDateTimeBiDirectionalConverter::class,
				'format'                          => Values::DATE_TIME_FORMAT,
				'timeZone'                        => Values::NULL
			],
			3  => [
				'biDirectionalConverterClassName' => DateTimeStringToDateTimeBiDirectionalConverter::class,
				'format'                          => Values::DATE_TIME_FORMAT,
				'timeZone'                        => Values::createDateTimeZoneObject()
			],
			4  => [
				'biDirectionalConverterClassName' => DateTimeStringToDateTimeImmutableBiDirectionalConverter::class,
				'format'                          => Values::DATE_TIME_FORMAT,
				'timeZone'                        => Values::NULL
			],
			5  => [
				'biDirectionalConverterClassName' => DateTimeStringToDateTimeImmutableBiDirectionalConverter::class,
				'format'                          => Values::DATE_TIME_FORMAT,
				'timeZone'                        => Values::createDateTimeZoneObject()
			],
			6  => [
				'biDirectionalConverterClassName' => DateTimeToDateTimeStringBiDirectionalConverter::class,
				'format'                          => Values::DATE_TIME_FORMAT,
				'timeZone'                        => Values::NULL
			],
			7  => [
				'biDirectionalConverterClassName' => DateTimeToDateTimeStringBiDirectionalConverter::class,
				'format'                          => Values::DATE_TIME_FORMAT,
				'timeZone'                        => Values::createDateTimeZoneObject()
			],
			8  => [
				'biDirectionalConverterClassName' => NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter::class,
				'format'                          => Values::DATE_TIME_FORMAT,
				'timeZone'                        => Values::NULL
			],
			9  => [
				'biDirectionalConverterClassName' => NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter::class,
				'format'                          => Values::DATE_TIME_FORMAT,
				'timeZone'                        => Values::createDateTimeZoneObject()
			],
			10 => [
				'biDirectionalConverterClassName' => NullableDateTimeStringToNullableDateTimeBiDirectionalConverter::class,
				'format'                          => Values::DATE_TIME_FORMAT,
				'timeZone'                        => Values::NULL
			],
			11 => [
				'biDirectionalConverterClassName' => NullableDateTimeStringToNullableDateTimeBiDirectionalConverter::class,
				'format'                          => Values::DATE_TIME_FORMAT,
				'timeZone'                        => Values::createDateTimeZoneObject()
			],
			12 => [
				'biDirectionalConverterClassName' => NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter::class,
				'format'                          => Values::DATE_TIME_FORMAT,
				'timeZone'                        => Values::NULL
			],
			13 => [
				'biDirectionalConverterClassName' => NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter::class,
				'format'                          => Values::DATE_TIME_FORMAT,
				'timeZone'                        => Values::createDateTimeZoneObject()
			],
			14 => [
				'biDirectionalConverterClassName' => NullableDateTimeToNullableDateTimeStringBiDirectionalConverter::class,
				'format'                          => Values::DATE_TIME_FORMAT,
				'timeZone'                        => Values::NULL
			],
			15 => [
				'biDirectionalConverterClassName' => NullableDateTimeToNullableDateTimeStringBiDirectionalConverter::class,
				'format'                          => Values::DATE_TIME_FORMAT,
				'timeZone'                        => Values::createDateTimeZoneObject()
			]
		];
	}
}
