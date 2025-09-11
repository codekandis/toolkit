<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\UniDirectionalConverters\UniDirectionalConverterInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BinaryStringToBooleanArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BinaryStringToIntegerUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanArrayToBinaryStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanIntegerStringToBooleanUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanIntegerToBooleanUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanStringToBooleanUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanToBooleanIntegerStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanToBooleanIntegerUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanToBooleanStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\ClassConstantsToArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\DateTimeImmutableToDateTimeStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\DateTimeStringToDateTimeImmutableUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\DateTimeStringToDateTimeUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\DateTimeToDateTimeStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\EnumValuesToKeysArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\FloatStringToFloatUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\FloatToFloatStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\IntegerStringToIntegerUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\IntegerToBinaryStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\IntegerToIntegerStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\InterfaceConstantsToArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\InterfaceOrClassConstantsToArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBinaryStringToNullableIntegerUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanIntegerToNullableBooleanUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanStringToNullableBooleanUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanToNullableBooleanIntegerUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanToNullableBooleanStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableClassConstantsToNullableArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeToNullableDateTimeStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableEnumValuesToNullableKeysArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableFloatStringToNullableFloatUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableFloatToNullableFloatStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableIntegerStringToNullableIntegerUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableIntegerToNullableBinaryStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableIntegerToNullableIntegerStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableInterfaceConstantsToNullableArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableNullStringToNullUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullStringToNullUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullToNullStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing unidirectional converters with valid value and expected converted value.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class UniDirectionalConvertersWithValidValueAndExpectedConvertedValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'uniDirectionalConverter' => new BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'validValue'              => Values::INTEGER_BACKED_ENUM_NAME,
				'expectedConvertedValue'  => Values::INTEGER_BACKED_ENUM_KEY_VALUE_PAIRS
			],
			1   => [
				'uniDirectionalConverter' => new BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'validValue'              => Values::STRING_BACKED_ENUM_NAME,
				'expectedConvertedValue'  => Values::STRING_BACKED_ENUM_KEY_VALUE_PAIRS
			],
			2   => [
				'uniDirectionalConverter' => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'validValue'              => Values::BINARY_STRING,
				'expectedConvertedValue'  => Values::BOOLEAN_ARRAY
			],
			3   => [
				'uniDirectionalConverter' => new BinaryStringToIntegerUniDirectionalConverter(),
				'validValue'              => Values::BINARY_STRING,
				'expectedConvertedValue'  => Values::INTEGER
			],
			4   => [
				'uniDirectionalConverter' => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_ARRAY,
				'expectedConvertedValue'  => Values::BINARY_STRING
			],
			5   => [
				'uniDirectionalConverter' => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_FALSE
			],
			6   => [
				'uniDirectionalConverter' => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_TRUE
			],
			7   => [
				'uniDirectionalConverter' => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_INTEGER_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_FALSE
			],
			8   => [
				'uniDirectionalConverter' => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_INTEGER_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_TRUE
			],
			9   => [
				'uniDirectionalConverter' => new BooleanStringToBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_STRING_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_FALSE
			],
			10  => [
				'uniDirectionalConverter' => new BooleanStringToBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_STRING_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_TRUE
			],
			11  => [
				'uniDirectionalConverter' => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_INTEGER_STRING_FALSE
			],
			12  => [
				'uniDirectionalConverter' => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_INTEGER_STRING_TRUE
			],
			13  => [
				'uniDirectionalConverter' => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_INTEGER_FALSE
			],
			14  => [
				'uniDirectionalConverter' => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_INTEGER_TRUE
			],
			15  => [
				'uniDirectionalConverter' => new BooleanToBooleanStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_STRING_FALSE
			],
			16  => [
				'uniDirectionalConverter' => new BooleanToBooleanStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_STRING_TRUE
			],
			17  => [
				'uniDirectionalConverter' => new ClassConstantsToArrayUniDirectionalConverter(),
				'validValue'              => Values::CONSTANTS_CLASS_NAME,
				'expectedConvertedValue'  => Values::CONSTANTS_ARRAY
			],
			18  => [
				'uniDirectionalConverter' => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validValue'              => Values::createDateTimeImmutableObject(),
				'expectedConvertedValue'  => Values::DATE_TIME_STRING
			],
			19  => [
				'uniDirectionalConverter' => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validValue'              => Values::createDateTimeImmutableObject(),
				'expectedConvertedValue'  => Values::DATE_TIME_STRING
			],
			20  => [
				'uniDirectionalConverter' => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::createDateTimeImmutableObject(),
				'expectedConvertedValue'  => Values::DATE_TIME_STRING
			],
			21  => [
				'uniDirectionalConverter' => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validValue'              => Values::DATE_TIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeImmutableObject()
			],
			22  => [
				'uniDirectionalConverter' => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validValue'              => Values::DATE_TIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeImmutableObject()
			],
			23  => [
				'uniDirectionalConverter' => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::DATE_TIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeImmutableObject()
			],
			24  => [
				'uniDirectionalConverter' => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validValue'              => Values::DATE_TIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeObject()
			],
			25  => [
				'uniDirectionalConverter' => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validValue'              => Values::DATE_TIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeObject()
			],
			26  => [
				'uniDirectionalConverter' => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::DATE_TIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeObject()
			],
			27  => [
				'uniDirectionalConverter' => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validValue'              => Values::createDateTimeObject(),
				'expectedConvertedValue'  => Values::DATE_TIME_STRING
			],
			28  => [
				'uniDirectionalConverter' => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validValue'              => Values::createDateTimeObject(),
				'expectedConvertedValue'  => Values::DATE_TIME_STRING
			],
			29  => [
				'uniDirectionalConverter' => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::createDateTimeObject(),
				'expectedConvertedValue'  => Values::DATE_TIME_STRING
			],
			30  => [
				'uniDirectionalConverter' => new EnumValuesToKeysArrayUniDirectionalConverter(),
				'validValue'              => Values::ENUM_NAME,
				'expectedConvertedValue'  => Values::ENUM_KEYS
			],
			31  => [
				'uniDirectionalConverter' => new EnumValuesToKeysArrayUniDirectionalConverter(),
				'validValue'              => Values::INTEGER_BACKED_ENUM_NAME,
				'expectedConvertedValue'  => Values::INTEGER_BACKED_ENUM_KEYS
			],
			32  => [
				'uniDirectionalConverter' => new EnumValuesToKeysArrayUniDirectionalConverter(),
				'validValue'              => Values::STRING_BACKED_ENUM_NAME,
				'expectedConvertedValue'  => Values::STRING_BACKED_ENUM_KEYS
			],
			33  => [
				'uniDirectionalConverter' => new FloatStringToFloatUniDirectionalConverter(),
				'validValue'              => Values::FLOAT_STRING,
				'expectedConvertedValue'  => Values::FLOAT
			],
			34  => [
				'uniDirectionalConverter' => new FloatToFloatStringUniDirectionalConverter(),
				'validValue'              => Values::FLOAT,
				'expectedConvertedValue'  => Values::FLOAT_STRING
			],
			35  => [
				'uniDirectionalConverter' => new IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'validValue'              => Values::INTEGER_BACKED_ENUM_NAME,
				'expectedConvertedValue'  => Values::INTEGER_BACKED_ENUM_KEY_VALUE_PAIRS
			],
			36  => [
				'uniDirectionalConverter' => new IntegerStringToIntegerUniDirectionalConverter(),
				'validValue'              => Values::INTEGER_STRING,
				'expectedConvertedValue'  => Values::INTEGER
			],
			37  => [
				'uniDirectionalConverter' => new IntegerToBinaryStringUniDirectionalConverter(),
				'validValue'              => Values::INTEGER,
				'expectedConvertedValue'  => Values::BINARY_STRING
			],
			38  => [
				'uniDirectionalConverter' => new IntegerToIntegerStringUniDirectionalConverter(),
				'validValue'              => Values::INTEGER,
				'expectedConvertedValue'  => Values::INTEGER_STRING
			],
			39  => [
				'uniDirectionalConverter' => new InterfaceConstantsToArrayUniDirectionalConverter(),
				'validValue'              => Values::CONSTANTS_INTERFACE_NAME,
				'expectedConvertedValue'  => Values::CONSTANTS_ARRAY
			],
			40  => [
				'uniDirectionalConverter' => new InterfaceOrClassConstantsToArrayUniDirectionalConverter(),
				'validValue'              => Values::CONSTANTS_INTERFACE_NAME,
				'expectedConvertedValue'  => Values::CONSTANTS_ARRAY
			],
			41  => [
				'uniDirectionalConverter' => new InterfaceOrClassConstantsToArrayUniDirectionalConverter(),
				'validValue'              => Values::CONSTANTS_CLASS_NAME,
				'expectedConvertedValue'  => Values::CONSTANTS_ARRAY
			],
			42  => [
				'uniDirectionalConverter' => new NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			43  => [
				'uniDirectionalConverter' => new NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'validValue'              => Values::INTEGER_BACKED_ENUM_NAME,
				'expectedConvertedValue'  => Values::INTEGER_BACKED_ENUM_KEY_VALUE_PAIRS
			],
			44  => [
				'uniDirectionalConverter' => new NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'validValue'              => Values::STRING_BACKED_ENUM_NAME,
				'expectedConvertedValue'  => Values::STRING_BACKED_ENUM_KEY_VALUE_PAIRS
			],
			45  => [
				'uniDirectionalConverter' => new NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			46  => [
				'uniDirectionalConverter' => new NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter(),
				'validValue'              => Values::BINARY_STRING,
				'expectedConvertedValue'  => Values::BOOLEAN_ARRAY
			],
			47  => [
				'uniDirectionalConverter' => new NullableBinaryStringToNullableIntegerUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			48  => [
				'uniDirectionalConverter' => new NullableBinaryStringToNullableIntegerUniDirectionalConverter(),
				'validValue'              => Values::BINARY_STRING,
				'expectedConvertedValue'  => Values::INTEGER
			],
			49  => [
				'uniDirectionalConverter' => new NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			50  => [
				'uniDirectionalConverter' => new NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_ARRAY,
				'expectedConvertedValue'  => Values::BINARY_STRING
			],
			51  => [
				'uniDirectionalConverter' => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			52  => [
				'uniDirectionalConverter' => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_FALSE
			],
			53  => [
				'uniDirectionalConverter' => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_TRUE
			],
			54  => [
				'uniDirectionalConverter' => new NullableBooleanIntegerToNullableBooleanUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			55  => [
				'uniDirectionalConverter' => new NullableBooleanIntegerToNullableBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_INTEGER_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_FALSE
			],
			56  => [
				'uniDirectionalConverter' => new NullableBooleanIntegerToNullableBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_INTEGER_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_TRUE
			],
			57  => [
				'uniDirectionalConverter' => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			58  => [
				'uniDirectionalConverter' => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_STRING_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_FALSE
			],
			59  => [
				'uniDirectionalConverter' => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_STRING_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_TRUE
			],
			60  => [
				'uniDirectionalConverter' => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			61  => [
				'uniDirectionalConverter' => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_INTEGER_STRING_FALSE
			],
			62  => [
				'uniDirectionalConverter' => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_INTEGER_STRING_TRUE
			],
			63  => [
				'uniDirectionalConverter' => new NullableBooleanToNullableBooleanIntegerUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			64  => [
				'uniDirectionalConverter' => new NullableBooleanToNullableBooleanIntegerUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_INTEGER_FALSE
			],
			65  => [
				'uniDirectionalConverter' => new NullableBooleanToNullableBooleanIntegerUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_INTEGER_TRUE
			],
			66  => [
				'uniDirectionalConverter' => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			67  => [
				'uniDirectionalConverter' => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_STRING_FALSE
			],
			68  => [
				'uniDirectionalConverter' => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_STRING_TRUE
			],
			69  => [
				'uniDirectionalConverter' => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			70  => [
				'uniDirectionalConverter' => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'validValue'              => Values::CONSTANTS_CLASS_NAME,
				'expectedConvertedValue'  => Values::CONSTANTS_ARRAY
			],
			71  => [
				'uniDirectionalConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			72  => [
				'uniDirectionalConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validValue'              => Values::createDateTimeImmutableObject(),
				'expectedConvertedValue'  => Values::DATE_TIME_STRING
			],
			73  => [
				'uniDirectionalConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			74  => [
				'uniDirectionalConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validValue'              => Values::createDateTimeImmutableObject(),
				'expectedConvertedValue'  => Values::DATE_TIME_STRING
			],
			75  => [
				'uniDirectionalConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			76  => [
				'uniDirectionalConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::createDateTimeImmutableObject(),
				'expectedConvertedValue'  => Values::DATE_TIME_STRING
			],
			77  => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			78  => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validValue'              => Values::DATE_TIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeImmutableObject()
			],
			79  => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			80  => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validValue'              => Values::DATE_TIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeImmutableObject()
			],
			81  => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			82  => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::DATE_TIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeImmutableObject()
			],
			83  => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			84  => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validValue'              => Values::DATE_TIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeObject()
			],
			85  => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			86  => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validValue'              => Values::DATE_TIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeObject()
			],
			87  => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			88  => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::DATE_TIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeObject()
			],
			89  => [
				'uniDirectionalConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			90  => [
				'uniDirectionalConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'validValue'              => Values::createDateTimeObject(),
				'expectedConvertedValue'  => Values::DATE_TIME_STRING
			],
			91  => [
				'uniDirectionalConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			92  => [
				'uniDirectionalConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'validValue'              => Values::createDateTimeObject(),
				'expectedConvertedValue'  => Values::DATE_TIME_STRING
			],
			93  => [
				'uniDirectionalConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			94  => [
				'uniDirectionalConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::createDateTimeObject(),
				'expectedConvertedValue'  => Values::DATE_TIME_STRING
			],
			95  => [
				'uniDirectionalConverter' => new NullableEnumValuesToNullableKeysArrayUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			96  => [
				'uniDirectionalConverter' => new NullableEnumValuesToNullableKeysArrayUniDirectionalConverter(),
				'validValue'              => Values::ENUM_NAME,
				'expectedConvertedValue'  => Values::ENUM_KEYS
			],
			97  => [
				'uniDirectionalConverter' => new NullableEnumValuesToNullableKeysArrayUniDirectionalConverter(),
				'validValue'              => Values::INTEGER_BACKED_ENUM_NAME,
				'expectedConvertedValue'  => Values::INTEGER_BACKED_ENUM_KEYS
			],
			98  => [
				'uniDirectionalConverter' => new NullableEnumValuesToNullableKeysArrayUniDirectionalConverter(),
				'validValue'              => Values::STRING_BACKED_ENUM_NAME,
				'expectedConvertedValue'  => Values::STRING_BACKED_ENUM_KEYS
			],
			99  => [
				'uniDirectionalConverter' => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			100 => [
				'uniDirectionalConverter' => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'validValue'              => Values::FLOAT_STRING,
				'expectedConvertedValue'  => Values::FLOAT
			],
			101 => [
				'uniDirectionalConverter' => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			102 => [
				'uniDirectionalConverter' => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'validValue'              => Values::FLOAT,
				'expectedConvertedValue'  => Values::FLOAT_STRING
			],
			103 => [
				'uniDirectionalConverter' => new NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			104 => [
				'uniDirectionalConverter' => new NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'validValue'              => Values::INTEGER_BACKED_ENUM_NAME,
				'expectedConvertedValue'  => Values::INTEGER_BACKED_ENUM_KEY_VALUE_PAIRS
			],
			105 => [
				'uniDirectionalConverter' => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			106 => [
				'uniDirectionalConverter' => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'validValue'              => Values::INTEGER_STRING,
				'expectedConvertedValue'  => Values::INTEGER
			],
			107 => [
				'uniDirectionalConverter' => new NullableIntegerToNullableBinaryStringUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			108 => [
				'uniDirectionalConverter' => new NullableIntegerToNullableBinaryStringUniDirectionalConverter(),
				'validValue'              => Values::INTEGER,
				'expectedConvertedValue'  => Values::BINARY_STRING
			],
			109 => [
				'uniDirectionalConverter' => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			110 => [
				'uniDirectionalConverter' => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'validValue'              => Values::INTEGER,
				'expectedConvertedValue'  => Values::INTEGER_STRING
			],
			111 => [
				'uniDirectionalConverter' => new NullableInterfaceConstantsToNullableArrayUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			112 => [
				'uniDirectionalConverter' => new NullableInterfaceConstantsToNullableArrayUniDirectionalConverter(),
				'validValue'              => Values::CONSTANTS_INTERFACE_NAME,
				'expectedConvertedValue'  => Values::CONSTANTS_ARRAY
			],
			113 => [
				'uniDirectionalConverter' => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			114 => [
				'uniDirectionalConverter' => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'validValue'              => Values::CONSTANTS_INTERFACE_NAME,
				'expectedConvertedValue'  => Values::CONSTANTS_ARRAY
			],
			115 => [
				'uniDirectionalConverter' => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'validValue'              => Values::CONSTANTS_CLASS_NAME,
				'expectedConvertedValue'  => Values::CONSTANTS_ARRAY
			],
			116 => [
				'uniDirectionalConverter' => new NullableNullStringToNullUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			117 => [
				'uniDirectionalConverter' => new NullableNullStringToNullUniDirectionalConverter(),
				'validValue'              => Values::NULL_STRING,
				'expectedConvertedValue'  => Values::NULL
			],
			118 => [
				'uniDirectionalConverter' => new NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			119 => [
				'uniDirectionalConverter' => new NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'validValue'              => Values::STRING_BACKED_ENUM_NAME,
				'expectedConvertedValue'  => Values::STRING_BACKED_ENUM_KEY_VALUE_PAIRS
			],
			120 => [
				'uniDirectionalConverter' => new NullStringToNullUniDirectionalConverter(),
				'validValue'              => Values::NULL_STRING,
				'expectedConvertedValue'  => Values::NULL
			],
			121 => [
				'uniDirectionalConverter' => new NullToNullStringUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL_STRING
			],
			122 => [
				'uniDirectionalConverter' => new StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'validValue'              => Values::STRING_BACKED_ENUM_NAME,
				'expectedConvertedValue'  => Values::STRING_BACKED_ENUM_KEY_VALUE_PAIRS
			]
		];
	}
}
