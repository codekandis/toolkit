<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\DateTimeRelatedConverterInterfaceTest;

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
 * Represents a data provider providing `DateTime` related converters with expected timezone.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeRelatedConvertersWithExpectedTimeZoneDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			1  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			2  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			3  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			4  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			5  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			6  => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			7  => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			8  => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			9  => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			10 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			11 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			12 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			13 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			14 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			15 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			16 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			17 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			18 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			19 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			20 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			21 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			22 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			23 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			24 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			25 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			26 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			27 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			28 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			29 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			30 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			31 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			32 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			33 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			34 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			35 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			36 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			37 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			38 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			39 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			40 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			41 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			42 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			43 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			44 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			45 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			46 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			47 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			]
		];
	}
}
