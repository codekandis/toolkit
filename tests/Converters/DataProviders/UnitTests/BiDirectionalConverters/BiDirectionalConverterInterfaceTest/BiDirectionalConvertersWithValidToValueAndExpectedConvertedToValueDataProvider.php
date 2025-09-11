<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\BiDirectionalConverters\BiDirectionalConverterInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BinaryStringToBooleanArrayBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BinaryStringToIntegerBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanArrayToBinaryStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanIntegerStringToBooleanBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanIntegerToBooleanBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanStringToBooleanBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanToBooleanIntegerBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanToBooleanIntegerStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanToBooleanStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeImmutableToDateTimeStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeStringToDateTimeBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeStringToDateTimeImmutableBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeToDateTimeStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\FloatStringToFloatBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\FloatToFloatStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\IntegerStringToIntegerBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\IntegerToBinaryStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\IntegerToIntegerStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBinaryStringToNullableIntegerBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanIntegerToNullableBooleanBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanStringToNullableBooleanBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanToNullableBooleanIntegerBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanToNullableBooleanStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeStringToNullableDateTimeBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeToNullableDateTimeStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableFloatStringToNullableFloatBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableFloatToNullableFloatStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableIntegerStringToNullableIntegerBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableIntegerToNullableBinaryStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableIntegerToNullableIntegerStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullStringToNullBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullToNullStringBiDirectionalConverter;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing bidirectional converters with valid to value and expected converted value.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class BiDirectionalConvertersWithValidToValueAndExpectedConvertedToValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'biDirectionalConverter'   => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'validToValue'             => Values::BINARY_STRING,
				'expectedConvertedToValue' => Values::BOOLEAN_ARRAY
			],
			1  => [
				'biDirectionalConverter'   => new BinaryStringToIntegerBiDirectionalConverter(),
				'validToValue'             => Values::BINARY_STRING,
				'expectedConvertedToValue' => Values::INTEGER
			],
			2  => [
				'biDirectionalConverter'   => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_ARRAY,
				'expectedConvertedToValue' => Values::BINARY_STRING
			],
			3  => [
				'biDirectionalConverter'   => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_FALSE
			],
			4  => [
				'biDirectionalConverter'   => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_TRUE
			],
			5  => [
				'biDirectionalConverter'   => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_INTEGER_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_FALSE
			],
			6  => [
				'biDirectionalConverter'   => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_INTEGER_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_TRUE
			],
			7  => [
				'biDirectionalConverter'   => new BooleanStringToBooleanBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_STRING_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_FALSE
			],
			8  => [
				'biDirectionalConverter'   => new BooleanStringToBooleanBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_STRING_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_TRUE
			],
			9  => [
				'biDirectionalConverter'   => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_INTEGER_FALSE
			],
			10 => [
				'biDirectionalConverter'   => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_INTEGER_TRUE
			],
			11 => [
				'biDirectionalConverter'   => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_INTEGER_STRING_FALSE
			],
			12 => [
				'biDirectionalConverter'   => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_INTEGER_STRING_TRUE
			],
			13 => [
				'biDirectionalConverter'   => new BooleanToBooleanStringBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_STRING_FALSE
			],
			14 => [
				'biDirectionalConverter'   => new BooleanToBooleanStringBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_STRING_TRUE
			],
			15 => [
				'biDirectionalConverter'   => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validToValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedToValue' => Values::DATE_TIME_STRING
			],
			16 => [
				'biDirectionalConverter'   => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedToValue' => Values::DATE_TIME_STRING
			],
			17 => [
				'biDirectionalConverter'   => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedToValue' => Values::DATE_TIME_STRING
			],
			18 => [
				'biDirectionalConverter'   => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validToValue'             => Values::DATE_TIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeObject()
			],
			19 => [
				'biDirectionalConverter'   => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::DATE_TIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeObject()
			],
			20 => [
				'biDirectionalConverter'   => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::DATE_TIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeObject()
			],
			21 => [
				'biDirectionalConverter'   => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validToValue'             => Values::DATE_TIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeImmutableObject()
			],
			22 => [
				'biDirectionalConverter'   => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::DATE_TIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeImmutableObject()
			],
			23 => [
				'biDirectionalConverter'   => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::DATE_TIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeImmutableObject()
			],
			24 => [
				'biDirectionalConverter'   => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validToValue'             => Values::createDateTimeObject(),
				'expectedConvertedToValue' => Values::DATE_TIME_STRING
			],
			25 => [
				'biDirectionalConverter'   => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::createDateTimeObject(),
				'expectedConvertedToValue' => Values::DATE_TIME_STRING
			],
			26 => [
				'biDirectionalConverter'   => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::createDateTimeObject(),
				'expectedConvertedToValue' => Values::DATE_TIME_STRING
			],
			27 => [
				'biDirectionalConverter'   => new FloatStringToFloatBiDirectionalConverter(),
				'validToValue'             => Values::FLOAT_STRING,
				'expectedConvertedToValue' => Values::FLOAT
			],
			28 => [
				'biDirectionalConverter'   => new FloatToFloatStringBiDirectionalConverter(),
				'validToValue'             => Values::FLOAT,
				'expectedConvertedToValue' => Values::FLOAT_STRING
			],
			29 => [
				'biDirectionalConverter'   => new IntegerStringToIntegerBiDirectionalConverter(),
				'validToValue'             => Values::INTEGER_STRING,
				'expectedConvertedToValue' => Values::INTEGER
			],
			30 => [
				'biDirectionalConverter'   => new IntegerToBinaryStringBiDirectionalConverter(),
				'validToValue'             => Values::INTEGER,
				'expectedConvertedToValue' => Values::BINARY_STRING
			],
			31 => [
				'biDirectionalConverter'   => new IntegerToIntegerStringBiDirectionalConverter(),
				'validToValue'             => Values::INTEGER,
				'expectedConvertedToValue' => Values::INTEGER_STRING
			],
			32 => [
				'biDirectionalConverter'   => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			33 => [
				'biDirectionalConverter'   => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'validToValue'             => Values::BINARY_STRING,
				'expectedConvertedToValue' => Values::BOOLEAN_ARRAY
			],
			34 => [
				'biDirectionalConverter'   => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			35 => [
				'biDirectionalConverter'   => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'validToValue'             => Values::BINARY_STRING,
				'expectedConvertedToValue' => Values::INTEGER
			],
			36 => [
				'biDirectionalConverter'   => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			37 => [
				'biDirectionalConverter'   => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_ARRAY,
				'expectedConvertedToValue' => Values::BINARY_STRING
			],
			38 => [
				'biDirectionalConverter'   => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			39 => [
				'biDirectionalConverter'   => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_FALSE
			],
			40 => [
				'biDirectionalConverter'   => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_TRUE
			],
			41 => [
				'biDirectionalConverter'   => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			42 => [
				'biDirectionalConverter'   => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_INTEGER_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_FALSE
			],
			43 => [
				'biDirectionalConverter'   => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_INTEGER_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_TRUE
			],
			44 => [
				'biDirectionalConverter'   => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			45 => [
				'biDirectionalConverter'   => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_STRING_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_FALSE
			],
			46 => [
				'biDirectionalConverter'   => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_STRING_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_TRUE
			],
			47 => [
				'biDirectionalConverter'   => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			48 => [
				'biDirectionalConverter'   => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_INTEGER_FALSE
			],
			49 => [
				'biDirectionalConverter'   => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_INTEGER_TRUE
			],
			50 => [
				'biDirectionalConverter'   => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			51 => [
				'biDirectionalConverter'   => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_INTEGER_STRING_FALSE
			],
			52 => [
				'biDirectionalConverter'   => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_INTEGER_STRING_TRUE
			],
			53 => [
				'biDirectionalConverter'   => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			54 => [
				'biDirectionalConverter'   => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_STRING_FALSE
			],
			55 => [
				'biDirectionalConverter'   => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_STRING_TRUE
			],
			56 => [
				'biDirectionalConverter'   => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			57 => [
				'biDirectionalConverter'   => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validToValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedToValue' => Values::DATE_TIME_STRING
			],
			58 => [
				'biDirectionalConverter'   => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			59 => [
				'biDirectionalConverter'   => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedToValue' => Values::DATE_TIME_STRING
			],
			60 => [
				'biDirectionalConverter'   => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			61 => [
				'biDirectionalConverter'   => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedToValue' => Values::DATE_TIME_STRING
			],
			62 => [
				'biDirectionalConverter'   => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			63 => [
				'biDirectionalConverter'   => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validToValue'             => Values::DATE_TIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeObject()
			],
			64 => [
				'biDirectionalConverter'   => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			65 => [
				'biDirectionalConverter'   => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::DATE_TIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeObject()
			],
			66 => [
				'biDirectionalConverter'   => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			67 => [
				'biDirectionalConverter'   => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::DATE_TIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeObject()
			],
			68 => [
				'biDirectionalConverter'   => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			69 => [
				'biDirectionalConverter'   => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validToValue'             => Values::DATE_TIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeImmutableObject()
			],
			70 => [
				'biDirectionalConverter'   => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			71 => [
				'biDirectionalConverter'   => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::DATE_TIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeImmutableObject()
			],
			72 => [
				'biDirectionalConverter'   => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			73 => [
				'biDirectionalConverter'   => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::DATE_TIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeImmutableObject()
			],
			74 => [
				'biDirectionalConverter'   => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			75 => [
				'biDirectionalConverter'   => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validToValue'             => Values::createDateTimeObject(),
				'expectedConvertedToValue' => Values::DATE_TIME_STRING
			],
			76 => [
				'biDirectionalConverter'   => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			77 => [
				'biDirectionalConverter'   => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::createDateTimeObject(),
				'expectedConvertedToValue' => Values::DATE_TIME_STRING
			],
			78 => [
				'biDirectionalConverter'   => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			79 => [
				'biDirectionalConverter'   => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::createDateTimeObject(),
				'expectedConvertedToValue' => Values::DATE_TIME_STRING
			],
			80 => [
				'biDirectionalConverter'   => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			81 => [
				'biDirectionalConverter'   => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'validToValue'             => Values::FLOAT_STRING,
				'expectedConvertedToValue' => Values::FLOAT
			],
			82 => [
				'biDirectionalConverter'   => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			83 => [
				'biDirectionalConverter'   => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'validToValue'             => Values::FLOAT,
				'expectedConvertedToValue' => Values::FLOAT_STRING
			],
			84 => [
				'biDirectionalConverter'   => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			85 => [
				'biDirectionalConverter'   => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'validToValue'             => Values::INTEGER_STRING,
				'expectedConvertedToValue' => Values::INTEGER
			],
			86 => [
				'biDirectionalConverter'   => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			87 => [
				'biDirectionalConverter'   => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'validToValue'             => Values::INTEGER,
				'expectedConvertedToValue' => Values::BINARY_STRING
			],
			88 => [
				'biDirectionalConverter'   => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			89 => [
				'biDirectionalConverter'   => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'validToValue'             => Values::INTEGER,
				'expectedConvertedToValue' => Values::INTEGER_STRING
			],
			90 => [
				'biDirectionalConverter'   => new NullStringToNullBiDirectionalConverter(),
				'validToValue'             => Values::NULL_STRING,
				'expectedConvertedToValue' => Values::NULL
			],
			91 => [
				'biDirectionalConverter'   => new NullToNullStringBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL_STRING
			]
		];
	}
}
