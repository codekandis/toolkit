<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\UniDirectionalConverters\UniDirectionalConverterInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\ExpectedTypes;
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
use CodeKandis\ToolKit\Tests\Converters\Fixtures\TypedValues;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\Types;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\Values;
use CodeKandis\Types\InvalidTypeException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing unidirectional converters with invalid typed value, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class UniDirectionalConvertersWithInvalidTypedValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'uniDirectionalConverter'    => new BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			1   => [
				'uniDirectionalConverter'    => new BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			2   => [
				'uniDirectionalConverter'    => new BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			3   => [
				'uniDirectionalConverter'    => new BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			4   => [
				'uniDirectionalConverter'    => new BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			5   => [
				'uniDirectionalConverter'    => new BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			6   => [
				'uniDirectionalConverter'    => new BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			7   => [
				'uniDirectionalConverter'    => new BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			8   => [
				'uniDirectionalConverter'    => new BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			9   => [
				'uniDirectionalConverter'    => new BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			10  => [
				'uniDirectionalConverter'    => new BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			11  => [
				'uniDirectionalConverter'    => new BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			12  => [
				'uniDirectionalConverter'    => new BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			13  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			14  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			15  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			16  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			17  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			18  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			19  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			20  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			21  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			22  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			23  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			24  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			25  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			26  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			27  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			28  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			29  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			30  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			31  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			32  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			33  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			34  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			35  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			36  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			37  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			38  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			39  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->booleanArray )
			],
			40  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->booleanArray )
			],
			41  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->booleanArray )
			],
			42  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->booleanArray )
			],
			43  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->booleanArray )
			],
			44  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->booleanArray )
			],
			45  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->booleanArray )
			],
			46  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->booleanArray )
			],
			47  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->booleanArray )
			],
			48  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->booleanArray )
			],
			49  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->booleanArray )
			],
			50  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->booleanArray )
			],
			51  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->booleanArray )
			],
			52  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			53  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			54  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			55  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			56  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			57  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			58  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			59  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			60  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			61  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			62  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			63  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			64  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			65  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->integer )
			],
			66  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->integer )
			],
			67  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->integer )
			],
			68  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			69  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			70  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->integer )
			],
			71  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->integer )
			],
			72  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			73  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			74  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			75  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			76  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->integer )
			],
			77  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			78  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			79  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			80  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			81  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			82  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			83  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			84  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			85  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			86  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			87  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			88  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			89  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			90  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			91  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->boolean )
			],
			92  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->boolean )
			],
			93  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->boolean )
			],
			94  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->boolean )
			],
			95  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->boolean )
			],
			96  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->boolean )
			],
			97  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->boolean )
			],
			98  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->boolean )
			],
			99  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->boolean )
			],
			100 => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->boolean )
			],
			101 => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->boolean )
			],
			102 => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->boolean )
			],
			103 => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->boolean )
			],
			104 => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->boolean )
			],
			105 => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->boolean )
			],
			106 => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->boolean )
			],
			107 => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->boolean )
			],
			108 => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->boolean )
			],
			109 => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->boolean )
			],
			110 => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->boolean )
			],
			111 => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->boolean )
			],
			112 => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->boolean )
			],
			113 => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->boolean )
			],
			114 => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->boolean )
			],
			115 => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->boolean )
			],
			116 => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->boolean )
			],
			117 => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->boolean )
			],
			118 => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->boolean )
			],
			119 => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->boolean )
			],
			120 => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->boolean )
			],
			121 => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->boolean )
			],
			122 => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->boolean )
			],
			123 => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->boolean )
			],
			124 => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->boolean )
			],
			125 => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->boolean )
			],
			126 => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->boolean )
			],
			127 => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			128 => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			129 => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			130 => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			131 => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			132 => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			133 => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			134 => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			135 => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			136 => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			137 => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			138 => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			139 => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			140 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->dateTimeImmutable )
			],
			141 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTimeImmutable )
			],
			142 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTimeImmutable )
			],
			143 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			144 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			145 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->dateTimeImmutable )
			],
			146 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->dateTimeImmutable )
			],
			147 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->dateTimeImmutable )
			],
			148 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			149 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			150 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			151 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			152 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->dateTimeImmutable )
			],
			153 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			154 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->dateTimeImmutable )
			],
			155 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTimeImmutable )
			],
			156 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTimeImmutable )
			],
			157 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			158 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			159 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->dateTimeImmutable )
			],
			160 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->dateTimeImmutable )
			],
			161 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->dateTimeImmutable )
			],
			162 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			163 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			164 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			165 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			166 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->dateTimeImmutable )
			],
			167 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			168 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->dateTimeImmutable )
			],
			169 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTimeImmutable )
			],
			170 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTimeImmutable )
			],
			171 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			172 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			173 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->dateTimeImmutable )
			],
			174 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->dateTimeImmutable )
			],
			175 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->dateTimeImmutable )
			],
			176 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			177 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			178 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			179 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			180 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->dateTimeImmutable )
			],
			181 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			182 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			183 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			184 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			185 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			186 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			187 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			188 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			189 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			190 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			191 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			192 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			193 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			194 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			195 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			196 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			197 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			198 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			199 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			200 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			201 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			202 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			203 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			204 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			205 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			206 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			207 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			208 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			209 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			210 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			211 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			212 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			213 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			214 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			215 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			216 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			217 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			218 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			219 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			220 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			221 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			222 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			223 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			224 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			225 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			226 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			227 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			228 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			229 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			230 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			231 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			232 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			233 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			234 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			235 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			236 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			237 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			238 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			239 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			240 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			241 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			242 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			243 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			244 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			245 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			246 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			247 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			248 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			249 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			250 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			251 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			252 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			253 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			254 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			255 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			256 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			257 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			258 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			259 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			260 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->dateTime )
			],
			261 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTime )
			],
			262 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTime )
			],
			263 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			264 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			265 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->dateTime )
			],
			266 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->dateTime )
			],
			267 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->dateTime )
			],
			268 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			269 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			270 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			271 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			272 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->dateTime )
			],
			273 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			274 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->dateTime )
			],
			275 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTime )
			],
			276 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTime )
			],
			277 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			278 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			279 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->dateTime )
			],
			280 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->dateTime )
			],
			281 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->dateTime )
			],
			282 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			283 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			284 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			285 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			286 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->dateTime )
			],
			287 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			288 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->dateTime )
			],
			289 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTime )
			],
			290 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTime )
			],
			291 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			292 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			293 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->dateTime )
			],
			294 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->dateTime )
			],
			295 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->dateTime )
			],
			296 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			297 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			298 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			299 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			300 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->dateTime )
			],
			301 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->dateTime )
			],
			302 => [
				'uniDirectionalConverter'    => new EnumValuesToKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			303 => [
				'uniDirectionalConverter'    => new EnumValuesToKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			304 => [
				'uniDirectionalConverter'    => new EnumValuesToKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			305 => [
				'uniDirectionalConverter'    => new EnumValuesToKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			306 => [
				'uniDirectionalConverter'    => new EnumValuesToKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			307 => [
				'uniDirectionalConverter'    => new EnumValuesToKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			308 => [
				'uniDirectionalConverter'    => new EnumValuesToKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			309 => [
				'uniDirectionalConverter'    => new EnumValuesToKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			310 => [
				'uniDirectionalConverter'    => new EnumValuesToKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			311 => [
				'uniDirectionalConverter'    => new EnumValuesToKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			312 => [
				'uniDirectionalConverter'    => new EnumValuesToKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			313 => [
				'uniDirectionalConverter'    => new EnumValuesToKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			314 => [
				'uniDirectionalConverter'    => new EnumValuesToKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			315 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			316 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			317 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			318 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			319 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			320 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			321 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			322 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			323 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			324 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			325 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			326 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			327 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			328 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->float )
			],
			329 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->float )
			],
			330 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->float )
			],
			331 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->float )
			],
			332 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->float )
			],
			333 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->float )
			],
			334 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->float )
			],
			335 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->float )
			],
			336 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->float )
			],
			337 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->float )
			],
			338 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->float )
			],
			339 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->float )
			],
			340 => [
				'uniDirectionalConverter'    => new IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			341 => [
				'uniDirectionalConverter'    => new IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			342 => [
				'uniDirectionalConverter'    => new IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			343 => [
				'uniDirectionalConverter'    => new IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			344 => [
				'uniDirectionalConverter'    => new IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			345 => [
				'uniDirectionalConverter'    => new IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			346 => [
				'uniDirectionalConverter'    => new IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			347 => [
				'uniDirectionalConverter'    => new IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			348 => [
				'uniDirectionalConverter'    => new IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			349 => [
				'uniDirectionalConverter'    => new IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			350 => [
				'uniDirectionalConverter'    => new IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			351 => [
				'uniDirectionalConverter'    => new IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			352 => [
				'uniDirectionalConverter'    => new IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			353 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			354 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			355 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			356 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			357 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			358 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			359 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			360 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			361 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			362 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			363 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			364 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			365 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			366 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->integer )
			],
			367 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->integer )
			],
			368 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->integer )
			],
			369 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			370 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			371 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->integer )
			],
			372 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->integer )
			],
			373 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			374 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			375 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			376 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			377 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->integer )
			],
			378 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			379 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->integer )
			],
			380 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->integer )
			],
			381 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->integer )
			],
			382 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			383 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			384 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->integer )
			],
			385 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->integer )
			],
			386 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			387 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			388 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			389 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			390 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->integer )
			],
			391 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->integer )
			],
			392 => [
				'uniDirectionalConverter'    => new InterfaceConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			393 => [
				'uniDirectionalConverter'    => new InterfaceConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			394 => [
				'uniDirectionalConverter'    => new InterfaceConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			395 => [
				'uniDirectionalConverter'    => new InterfaceConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			396 => [
				'uniDirectionalConverter'    => new InterfaceConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			397 => [
				'uniDirectionalConverter'    => new InterfaceConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			398 => [
				'uniDirectionalConverter'    => new InterfaceConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			399 => [
				'uniDirectionalConverter'    => new InterfaceConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			400 => [
				'uniDirectionalConverter'    => new InterfaceConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			401 => [
				'uniDirectionalConverter'    => new InterfaceConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			402 => [
				'uniDirectionalConverter'    => new InterfaceConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			403 => [
				'uniDirectionalConverter'    => new InterfaceConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			404 => [
				'uniDirectionalConverter'    => new InterfaceConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			405 => [
				'uniDirectionalConverter'    => new InterfaceOrClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			406 => [
				'uniDirectionalConverter'    => new InterfaceOrClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			407 => [
				'uniDirectionalConverter'    => new InterfaceOrClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			408 => [
				'uniDirectionalConverter'    => new InterfaceOrClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			409 => [
				'uniDirectionalConverter'    => new InterfaceOrClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			410 => [
				'uniDirectionalConverter'    => new InterfaceOrClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			411 => [
				'uniDirectionalConverter'    => new InterfaceOrClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			412 => [
				'uniDirectionalConverter'    => new InterfaceOrClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			413 => [
				'uniDirectionalConverter'    => new InterfaceOrClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			414 => [
				'uniDirectionalConverter'    => new InterfaceOrClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			415 => [
				'uniDirectionalConverter'    => new InterfaceOrClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			416 => [
				'uniDirectionalConverter'    => new InterfaceOrClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			417 => [
				'uniDirectionalConverter'    => new InterfaceOrClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			418 => [
				'uniDirectionalConverter'    => new NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			419 => [
				'uniDirectionalConverter'    => new NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			420 => [
				'uniDirectionalConverter'    => new NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			421 => [
				'uniDirectionalConverter'    => new NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			422 => [
				'uniDirectionalConverter'    => new NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			423 => [
				'uniDirectionalConverter'    => new NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			424 => [
				'uniDirectionalConverter'    => new NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			425 => [
				'uniDirectionalConverter'    => new NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			426 => [
				'uniDirectionalConverter'    => new NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			427 => [
				'uniDirectionalConverter'    => new NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			428 => [
				'uniDirectionalConverter'    => new NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			429 => [
				'uniDirectionalConverter'    => new NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			430 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			431 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			432 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			433 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			434 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			435 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			436 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			437 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			438 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			439 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			440 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			441 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			442 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			443 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			444 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			445 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			446 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			447 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			448 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			449 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			450 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			451 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			452 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			453 => [
				'uniDirectionalConverter'    => new NullableBinaryStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			454 => [
				'uniDirectionalConverter'    => new NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBooleanArray )
			],
			455 => [
				'uniDirectionalConverter'    => new NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			456 => [
				'uniDirectionalConverter'    => new NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			457 => [
				'uniDirectionalConverter'    => new NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableBooleanArray )
			],
			458 => [
				'uniDirectionalConverter'    => new NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableBooleanArray )
			],
			459 => [
				'uniDirectionalConverter'    => new NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableBooleanArray )
			],
			460 => [
				'uniDirectionalConverter'    => new NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			461 => [
				'uniDirectionalConverter'    => new NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			462 => [
				'uniDirectionalConverter'    => new NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			463 => [
				'uniDirectionalConverter'    => new NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			464 => [
				'uniDirectionalConverter'    => new NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableBooleanArray )
			],
			465 => [
				'uniDirectionalConverter'    => new NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			466 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			467 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			468 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			469 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			470 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			471 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			472 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			473 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			474 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			475 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			476 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			477 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			478 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableInteger )
			],
			479 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableInteger )
			],
			480 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			481 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			482 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableInteger )
			],
			483 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableInteger )
			],
			484 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			485 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			486 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			487 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			488 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableInteger )
			],
			489 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			490 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			491 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			492 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			493 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			494 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			495 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			496 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			497 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			498 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			499 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			500 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			501 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			502 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBoolean )
			],
			503 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBoolean )
			],
			504 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableBoolean )
			],
			505 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableBoolean )
			],
			506 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableBoolean )
			],
			507 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableBoolean )
			],
			508 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableBoolean )
			],
			509 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableBoolean )
			],
			510 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableBoolean )
			],
			511 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableBoolean )
			],
			512 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableBoolean )
			],
			513 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBoolean )
			],
			514 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBoolean )
			],
			515 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableBoolean )
			],
			516 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableBoolean )
			],
			517 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableBoolean )
			],
			518 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableBoolean )
			],
			519 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableBoolean )
			],
			520 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableBoolean )
			],
			521 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableBoolean )
			],
			522 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableBoolean )
			],
			523 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBoolean )
			],
			524 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBoolean )
			],
			525 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableBoolean )
			],
			526 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableBoolean )
			],
			527 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableBoolean )
			],
			528 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableBoolean )
			],
			529 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableBoolean )
			],
			530 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableBoolean )
			],
			531 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableBoolean )
			],
			532 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableBoolean )
			],
			533 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableBoolean )
			],
			534 => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			535 => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			536 => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			537 => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			538 => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			539 => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			540 => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			541 => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			542 => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			543 => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			544 => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			545 => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			546 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			547 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			548 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			549 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			550 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			551 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			552 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			553 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			554 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			555 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			556 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			557 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			558 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			559 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			560 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			561 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			562 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			563 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			564 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			565 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			566 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			567 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			568 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			569 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			570 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			571 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			572 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			573 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			574 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			575 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			576 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			577 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			578 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			579 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			580 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			581 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			582 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			583 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			584 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			585 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			586 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			587 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			588 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			589 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			590 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			591 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			592 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			593 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			594 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			595 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			596 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			597 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			598 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			599 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			600 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			601 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			602 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			603 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			604 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			605 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			606 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			607 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			608 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			609 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			610 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			611 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			612 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			613 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			614 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			615 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			616 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			617 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			618 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			619 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			620 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			621 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			622 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			623 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			624 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			625 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			626 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			627 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			628 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			629 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			630 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			631 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			632 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			633 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			634 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			635 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			636 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			637 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			638 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			639 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			640 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			641 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			642 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			643 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			644 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			645 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			646 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			647 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			648 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			649 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			650 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			651 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			652 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			653 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			654 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			655 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			656 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			657 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTime )
			],
			658 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTime )
			],
			659 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			660 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			661 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableDateTime )
			],
			662 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableDateTime )
			],
			663 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableDateTime )
			],
			664 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			665 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			666 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			667 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			668 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableDateTime )
			],
			669 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			670 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTime )
			],
			671 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTime )
			],
			672 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			673 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			674 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableDateTime )
			],
			675 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableDateTime )
			],
			676 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableDateTime )
			],
			677 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			678 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			679 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			680 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			681 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableDateTime )
			],
			682 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			683 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTime )
			],
			684 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTime )
			],
			685 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			686 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			687 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableDateTime )
			],
			688 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableDateTime )
			],
			689 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableDateTime )
			],
			690 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			691 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			692 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			693 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			694 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableDateTime )
			],
			695 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableDateTime )
			],
			696 => [
				'uniDirectionalConverter'    => new NullableEnumValuesToNullableKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			697 => [
				'uniDirectionalConverter'    => new NullableEnumValuesToNullableKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			698 => [
				'uniDirectionalConverter'    => new NullableEnumValuesToNullableKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			699 => [
				'uniDirectionalConverter'    => new NullableEnumValuesToNullableKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			700 => [
				'uniDirectionalConverter'    => new NullableEnumValuesToNullableKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			701 => [
				'uniDirectionalConverter'    => new NullableEnumValuesToNullableKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			702 => [
				'uniDirectionalConverter'    => new NullableEnumValuesToNullableKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			703 => [
				'uniDirectionalConverter'    => new NullableEnumValuesToNullableKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			704 => [
				'uniDirectionalConverter'    => new NullableEnumValuesToNullableKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			705 => [
				'uniDirectionalConverter'    => new NullableEnumValuesToNullableKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			706 => [
				'uniDirectionalConverter'    => new NullableEnumValuesToNullableKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			707 => [
				'uniDirectionalConverter'    => new NullableEnumValuesToNullableKeysArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			708 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			709 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			710 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			711 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			712 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			713 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			714 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			715 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			716 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			717 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			718 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			719 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			720 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableFloat )
			],
			721 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableFloat )
			],
			722 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableFloat )
			],
			723 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableFloat )
			],
			724 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableFloat )
			],
			725 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableFloat )
			],
			726 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableFloat )
			],
			727 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableFloat )
			],
			728 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableFloat )
			],
			729 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableFloat )
			],
			730 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableFloat )
			],
			731 => [
				'uniDirectionalConverter'    => new NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			732 => [
				'uniDirectionalConverter'    => new NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			733 => [
				'uniDirectionalConverter'    => new NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			734 => [
				'uniDirectionalConverter'    => new NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			735 => [
				'uniDirectionalConverter'    => new NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			736 => [
				'uniDirectionalConverter'    => new NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			737 => [
				'uniDirectionalConverter'    => new NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			738 => [
				'uniDirectionalConverter'    => new NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			739 => [
				'uniDirectionalConverter'    => new NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			740 => [
				'uniDirectionalConverter'    => new NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			741 => [
				'uniDirectionalConverter'    => new NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			742 => [
				'uniDirectionalConverter'    => new NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			743 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			744 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			745 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			746 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			747 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			748 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			749 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			750 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			751 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			752 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			753 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			754 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			755 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableInteger )
			],
			756 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableInteger )
			],
			757 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			758 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			759 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableInteger )
			],
			760 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			761 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			762 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			763 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			764 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableInteger )
			],
			765 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			766 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableInteger )
			],
			767 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableInteger )
			],
			768 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			769 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			770 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableInteger )
			],
			771 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableInteger )
			],
			772 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			773 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			774 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			775 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			776 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableInteger )
			],
			777 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableInteger )
			],
			778 => [
				'uniDirectionalConverter'    => new NullableInterfaceConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			779 => [
				'uniDirectionalConverter'    => new NullableInterfaceConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			780 => [
				'uniDirectionalConverter'    => new NullableInterfaceConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			781 => [
				'uniDirectionalConverter'    => new NullableInterfaceConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			782 => [
				'uniDirectionalConverter'    => new NullableInterfaceConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			783 => [
				'uniDirectionalConverter'    => new NullableInterfaceConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			784 => [
				'uniDirectionalConverter'    => new NullableInterfaceConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			785 => [
				'uniDirectionalConverter'    => new NullableInterfaceConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			786 => [
				'uniDirectionalConverter'    => new NullableInterfaceConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			787 => [
				'uniDirectionalConverter'    => new NullableInterfaceConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			788 => [
				'uniDirectionalConverter'    => new NullableInterfaceConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			789 => [
				'uniDirectionalConverter'    => new NullableInterfaceConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			790 => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			791 => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			792 => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			793 => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			794 => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			795 => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			796 => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			797 => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			798 => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			799 => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			800 => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			801 => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			802 => [
				'uniDirectionalConverter'    => new NullableNullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			803 => [
				'uniDirectionalConverter'    => new NullableNullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			804 => [
				'uniDirectionalConverter'    => new NullableNullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			805 => [
				'uniDirectionalConverter'    => new NullableNullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			806 => [
				'uniDirectionalConverter'    => new NullableNullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			807 => [
				'uniDirectionalConverter'    => new NullableNullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			808 => [
				'uniDirectionalConverter'    => new NullableNullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			809 => [
				'uniDirectionalConverter'    => new NullableNullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			810 => [
				'uniDirectionalConverter'    => new NullableNullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			811 => [
				'uniDirectionalConverter'    => new NullableNullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			812 => [
				'uniDirectionalConverter'    => new NullableNullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			813 => [
				'uniDirectionalConverter'    => new NullableNullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			814 => [
				'uniDirectionalConverter'    => new NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			815 => [
				'uniDirectionalConverter'    => new NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			816 => [
				'uniDirectionalConverter'    => new NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			817 => [
				'uniDirectionalConverter'    => new NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			818 => [
				'uniDirectionalConverter'    => new NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			819 => [
				'uniDirectionalConverter'    => new NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			820 => [
				'uniDirectionalConverter'    => new NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			821 => [
				'uniDirectionalConverter'    => new NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			822 => [
				'uniDirectionalConverter'    => new NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			823 => [
				'uniDirectionalConverter'    => new NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			824 => [
				'uniDirectionalConverter'    => new NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			825 => [
				'uniDirectionalConverter'    => new NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->nullableString )
			],
			826 => [
				'uniDirectionalConverter'    => new NullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			827 => [
				'uniDirectionalConverter'    => new NullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			828 => [
				'uniDirectionalConverter'    => new NullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			829 => [
				'uniDirectionalConverter'    => new NullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			830 => [
				'uniDirectionalConverter'    => new NullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			831 => [
				'uniDirectionalConverter'    => new NullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			832 => [
				'uniDirectionalConverter'    => new NullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			833 => [
				'uniDirectionalConverter'    => new NullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			834 => [
				'uniDirectionalConverter'    => new NullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			835 => [
				'uniDirectionalConverter'    => new NullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			836 => [
				'uniDirectionalConverter'    => new NullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			837 => [
				'uniDirectionalConverter'    => new NullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			838 => [
				'uniDirectionalConverter'    => new NullStringToNullUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			839 => [
				'uniDirectionalConverter'    => new NullToNullStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->null )
			],
			840 => [
				'uniDirectionalConverter'    => new NullToNullStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->null )
			],
			841 => [
				'uniDirectionalConverter'    => new NullToNullStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->null )
			],
			842 => [
				'uniDirectionalConverter'    => new NullToNullStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->null )
			],
			843 => [
				'uniDirectionalConverter'    => new NullToNullStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->null )
			],
			844 => [
				'uniDirectionalConverter'    => new NullToNullStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->null )
			],
			845 => [
				'uniDirectionalConverter'    => new NullToNullStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->null )
			],
			846 => [
				'uniDirectionalConverter'    => new NullToNullStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->null )
			],
			847 => [
				'uniDirectionalConverter'    => new NullToNullStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->null )
			],
			848 => [
				'uniDirectionalConverter'    => new NullToNullStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->null )
			],
			849 => [
				'uniDirectionalConverter'    => new NullToNullStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->null )
			],
			850 => [
				'uniDirectionalConverter'    => new NullToNullStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->null )
			],
			851 => [
				'uniDirectionalConverter'    => new NullToNullStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->null )
			],
			852 => [
				'uniDirectionalConverter'    => new StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			853 => [
				'uniDirectionalConverter'    => new StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			854 => [
				'uniDirectionalConverter'    => new StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			855 => [
				'uniDirectionalConverter'    => new StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			856 => [
				'uniDirectionalConverter'    => new StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			857 => [
				'uniDirectionalConverter'    => new StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			858 => [
				'uniDirectionalConverter'    => new StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			859 => [
				'uniDirectionalConverter'    => new StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			860 => [
				'uniDirectionalConverter'    => new StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			861 => [
				'uniDirectionalConverter'    => new StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			862 => [
				'uniDirectionalConverter'    => new StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue ), new ExpectedTypes()->string )
			],
			863 => [
				'uniDirectionalConverter'    => new StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			864 => [
				'uniDirectionalConverter'    => new StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue ), new ExpectedTypes()->string )
			]
		];
	}
}
