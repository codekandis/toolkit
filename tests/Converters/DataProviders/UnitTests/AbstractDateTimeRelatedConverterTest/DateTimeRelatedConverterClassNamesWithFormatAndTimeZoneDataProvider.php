<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\AbstractDateTimeRelatedConverterTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeImmutableToDateTimeStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeStringToDateTimeBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeStringToDateTimeImmutableBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeToDateTimeStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeStringToNullableDateTimeBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeToNullableDateTimeStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\DateTimeImmutableToDateTimeStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\DateTimeStringToDateTimeImmutableUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\DateTimeStringToDateTimeUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\DateTimeToDateTimeStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeToNullableDateTimeStringUniDirectionalConverter;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing `DateTime` related converter class names with format and time zone.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeRelatedConverterClassNamesWithFormatAndTimeZoneDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'dateTimeRelatedConverterClassName' => DateTimeImmutableToDateTimeStringBiDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			1  => [
				'dateTimeRelatedConverterClassName' => DateTimeImmutableToDateTimeStringBiDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			2  => [
				'dateTimeRelatedConverterClassName' => DateTimeImmutableToDateTimeStringUniDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			3  => [
				'dateTimeRelatedConverterClassName' => DateTimeImmutableToDateTimeStringUniDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			4  => [
				'dateTimeRelatedConverterClassName' => DateTimeStringToDateTimeBiDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			5  => [
				'dateTimeRelatedConverterClassName' => DateTimeStringToDateTimeBiDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			6  => [
				'dateTimeRelatedConverterClassName' => DateTimeStringToDateTimeImmutableBiDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			7  => [
				'dateTimeRelatedConverterClassName' => DateTimeStringToDateTimeImmutableBiDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			8  => [
				'dateTimeRelatedConverterClassName' => DateTimeStringToDateTimeImmutableUniDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			9  => [
				'dateTimeRelatedConverterClassName' => DateTimeStringToDateTimeImmutableUniDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			10 => [
				'dateTimeRelatedConverterClassName' => DateTimeStringToDateTimeUniDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			11 => [
				'dateTimeRelatedConverterClassName' => DateTimeStringToDateTimeUniDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			12 => [
				'dateTimeRelatedConverterClassName' => DateTimeToDateTimeStringBiDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			13 => [
				'dateTimeRelatedConverterClassName' => DateTimeToDateTimeStringBiDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			14 => [
				'dateTimeRelatedConverterClassName' => DateTimeToDateTimeStringUniDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			15 => [
				'dateTimeRelatedConverterClassName' => DateTimeToDateTimeStringUniDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			16 => [
				'dateTimeRelatedConverterClassName' => NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			17 => [
				'dateTimeRelatedConverterClassName' => NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			18 => [
				'dateTimeRelatedConverterClassName' => NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			19 => [
				'dateTimeRelatedConverterClassName' => NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			20 => [
				'dateTimeRelatedConverterClassName' => NullableDateTimeStringToNullableDateTimeBiDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			21 => [
				'dateTimeRelatedConverterClassName' => NullableDateTimeStringToNullableDateTimeBiDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			22 => [
				'dateTimeRelatedConverterClassName' => NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			23 => [
				'dateTimeRelatedConverterClassName' => NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			24 => [
				'dateTimeRelatedConverterClassName' => NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			25 => [
				'dateTimeRelatedConverterClassName' => NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			26 => [
				'dateTimeRelatedConverterClassName' => NullableDateTimeStringToNullableDateTimeUniDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			27 => [
				'dateTimeRelatedConverterClassName' => NullableDateTimeStringToNullableDateTimeUniDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			28 => [
				'dateTimeRelatedConverterClassName' => NullableDateTimeToNullableDateTimeStringBiDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			29 => [
				'dateTimeRelatedConverterClassName' => NullableDateTimeToNullableDateTimeStringBiDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			30 => [
				'dateTimeRelatedConverterClassName' => NullableDateTimeToNullableDateTimeStringUniDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			31 => [
				'dateTimeRelatedConverterClassName' => NullableDateTimeToNullableDateTimeStringUniDirectionalConverter::class,
				'format'                            => Values::DATE_TIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			]
		];
	}
}
