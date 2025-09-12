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
 * Represents a data provider providing `DateTime` related converters with expected format.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeRelatedConvertersWithExpectedFormatDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'expectedFormat'           => $format
			],
			1  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			2  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			3  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'expectedFormat'           => $format
			],
			4  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			5  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			6  => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'expectedFormat'           => $format
			],
			7  => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			8  => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			9  => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'expectedFormat'           => $format
			],
			10 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			11 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			12 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'expectedFormat'           => $format
			],
			13 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			14 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			15 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'expectedFormat'           => $format
			],
			16 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			17 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			18 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'expectedFormat'           => $format
			],
			19 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			20 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			21 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'expectedFormat'           => $format
			],
			22 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			23 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			24 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'expectedFormat'           => $format
			],
			25 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			26 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			27 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'expectedFormat'           => $format
			],
			28 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			29 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			30 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'expectedFormat'           => $format
			],
			31 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			32 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			33 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'expectedFormat'           => $format
			],
			34 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			35 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			36 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'expectedFormat'           => $format
			],
			37 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			38 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			39 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'expectedFormat'           => $format
			],
			40 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			41 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			42 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'expectedFormat'           => $format
			],
			43 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			44 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			45 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'expectedFormat'           => $format
			],
			46 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			47 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			]
		];
	}
}
