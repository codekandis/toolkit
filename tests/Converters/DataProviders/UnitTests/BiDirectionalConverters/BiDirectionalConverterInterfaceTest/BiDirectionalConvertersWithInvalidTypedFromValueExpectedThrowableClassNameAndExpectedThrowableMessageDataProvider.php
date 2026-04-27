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
use CodeKandis\ToolKit\Converters\ExpectedTypes;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\TypedValues;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\Types;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\Values;
use CodeKandis\Types\InvalidTypeException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing bidirectional converters with invalid typed from value, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class BiDirectionalConvertersWithInvalidTypedFromValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->booleanArray )
			],
			1   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->booleanArray )
			],
			2   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->booleanArray )
			],
			3   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->booleanArray )
			],
			4   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->booleanArray )
			],
			5   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->booleanArray )
			],
			6   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->booleanArray )
			],
			7   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->booleanArray )
			],
			8   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->booleanArray )
			],
			9   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->booleanArray )
			],
			10  => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->booleanArray )
			],
			11  => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->booleanArray )
			],
			12  => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->booleanArray )
			],
			13  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->integer )
			],
			14  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->integer )
			],
			15  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->integer )
			],
			16  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			17  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			18  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->integer )
			],
			19  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->integer )
			],
			20  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			21  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			22  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			23  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			24  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->integer )
			],
			25  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			26  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			27  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			28  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			29  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			30  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			31  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			32  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			33  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			34  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			35  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			36  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			37  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			38  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			39  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->boolean )
			],
			40  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->boolean )
			],
			41  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->boolean )
			],
			42  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->boolean )
			],
			43  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->boolean )
			],
			44  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->boolean )
			],
			45  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->boolean )
			],
			46  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->boolean )
			],
			47  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->boolean )
			],
			48  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->boolean )
			],
			49  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->boolean )
			],
			50  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->boolean )
			],
			51  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->boolean )
			],
			52  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->boolean )
			],
			53  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->boolean )
			],
			54  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->boolean )
			],
			55  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->boolean )
			],
			56  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->boolean )
			],
			57  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->boolean )
			],
			58  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->boolean )
			],
			59  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->boolean )
			],
			60  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->boolean )
			],
			61  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->boolean )
			],
			62  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->boolean )
			],
			63  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->boolean )
			],
			64  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->boolean )
			],
			65  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->boolean )
			],
			66  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->boolean )
			],
			67  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->boolean )
			],
			68  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->boolean )
			],
			69  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->boolean )
			],
			70  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->boolean )
			],
			71  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->boolean )
			],
			72  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->boolean )
			],
			73  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->boolean )
			],
			74  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->boolean )
			],
			75  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->integer )
			],
			76  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->integer )
			],
			77  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->integer )
			],
			78  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			79  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			80  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->integer )
			],
			81  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->integer )
			],
			82  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			83  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			84  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			85  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			86  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->integer )
			],
			87  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			88  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			89  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			90  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			91  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			92  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			93  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			94  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			95  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			96  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			97  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			98  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			99  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			100 => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			101 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			102 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			103 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			104 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			105 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			106 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			107 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			108 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			109 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			110 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			111 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			112 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			113 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			114 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			115 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			116 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			117 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			118 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			119 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			120 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			121 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			122 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			123 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			124 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			125 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			126 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			127 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			128 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			129 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			130 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			131 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			132 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			133 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			134 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			135 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			136 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			137 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			138 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			139 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			140 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			141 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			142 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			143 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			144 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			145 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			146 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			147 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			148 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			149 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			150 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			151 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			152 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			153 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->dateTime )
			],
			154 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTime )
			],
			155 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTime )
			],
			156 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			157 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			158 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->dateTime )
			],
			159 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->dateTime )
			],
			160 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->dateTime )
			],
			161 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			162 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			163 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			164 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			165 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->dateTime )
			],
			166 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			167 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->dateTime )
			],
			168 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTime )
			],
			169 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTime )
			],
			170 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			171 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			172 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->dateTime )
			],
			173 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->dateTime )
			],
			174 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->dateTime )
			],
			175 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			176 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			177 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			178 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			179 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->dateTime )
			],
			180 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			181 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->dateTime )
			],
			182 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTime )
			],
			183 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTime )
			],
			184 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			185 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			186 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->dateTime )
			],
			187 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->dateTime )
			],
			188 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->dateTime )
			],
			189 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			190 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			191 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			192 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			193 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->dateTime )
			],
			194 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTime )
			],
			195 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->dateTimeImmutable )
			],
			196 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTimeImmutable )
			],
			197 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTimeImmutable )
			],
			198 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			199 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			200 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->dateTimeImmutable )
			],
			201 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->dateTimeImmutable )
			],
			202 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->dateTimeImmutable )
			],
			203 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			204 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			205 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			206 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			207 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->dateTimeImmutable )
			],
			208 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			209 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->dateTimeImmutable )
			],
			210 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTimeImmutable )
			],
			211 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTimeImmutable )
			],
			212 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			213 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			214 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->dateTimeImmutable )
			],
			215 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->dateTimeImmutable )
			],
			216 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->dateTimeImmutable )
			],
			217 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			218 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			219 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			220 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			221 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->dateTimeImmutable )
			],
			222 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			223 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->dateTimeImmutable )
			],
			224 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTimeImmutable )
			],
			225 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTimeImmutable )
			],
			226 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			227 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			228 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->dateTimeImmutable )
			],
			229 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->dateTimeImmutable )
			],
			230 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->dateTimeImmutable )
			],
			231 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			232 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			233 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			234 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			235 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->dateTimeImmutable )
			],
			236 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			237 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			238 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			239 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			240 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			241 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			242 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			243 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			244 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			245 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			246 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			247 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			248 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			249 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			250 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			251 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			252 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			253 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			254 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			255 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			256 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			257 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			258 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			259 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			260 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			261 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			262 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			263 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			264 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			265 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			266 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			267 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			268 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			269 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			270 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			271 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			272 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			273 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			274 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			275 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			276 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->float )
			],
			277 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->float )
			],
			278 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->float )
			],
			279 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->float )
			],
			280 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->float )
			],
			281 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->float )
			],
			282 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->float )
			],
			283 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->float )
			],
			284 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->float )
			],
			285 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->float )
			],
			286 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->float )
			],
			287 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->float )
			],
			288 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			289 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			290 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			291 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			292 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			293 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			294 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			295 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			296 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			297 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			298 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			299 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			300 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			301 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->integer )
			],
			302 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->integer )
			],
			303 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->integer )
			],
			304 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			305 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			306 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->integer )
			],
			307 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->integer )
			],
			308 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			309 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			310 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			311 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			312 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->integer )
			],
			313 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->integer )
			],
			314 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			315 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			316 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			317 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			318 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			319 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			320 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			321 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			322 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			323 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			324 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			325 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			326 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			327 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			328 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			329 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			330 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			331 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			332 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			333 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			334 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			335 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			336 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			337 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			338 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			339 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			340 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBooleanArray )
			],
			341 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			342 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			343 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableBooleanArray )
			],
			344 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableBooleanArray )
			],
			345 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableBooleanArray )
			],
			346 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			347 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			348 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			349 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			350 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableBooleanArray )
			],
			351 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			352 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableInteger )
			],
			353 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableInteger )
			],
			354 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			355 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			356 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableInteger )
			],
			357 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableInteger )
			],
			358 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			359 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			360 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			361 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			362 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableInteger )
			],
			363 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			364 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			365 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			366 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			367 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			368 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			369 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			370 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			371 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			372 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			373 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			374 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			375 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			376 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBoolean )
			],
			377 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBoolean )
			],
			378 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableBoolean )
			],
			379 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableBoolean )
			],
			380 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableBoolean )
			],
			381 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableBoolean )
			],
			382 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableBoolean )
			],
			383 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableBoolean )
			],
			384 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableBoolean )
			],
			385 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableBoolean )
			],
			386 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableBoolean )
			],
			387 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBoolean )
			],
			388 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBoolean )
			],
			389 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableBoolean )
			],
			390 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableBoolean )
			],
			391 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableBoolean )
			],
			392 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableBoolean )
			],
			393 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableBoolean )
			],
			394 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableBoolean )
			],
			395 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableBoolean )
			],
			396 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableBoolean )
			],
			397 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableBoolean )
			],
			398 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBoolean )
			],
			399 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBoolean )
			],
			400 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableBoolean )
			],
			401 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableBoolean )
			],
			402 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableBoolean )
			],
			403 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableBoolean )
			],
			404 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableBoolean )
			],
			405 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableBoolean )
			],
			406 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableBoolean )
			],
			407 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableBoolean )
			],
			408 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableBoolean )
			],
			409 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableInteger )
			],
			410 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableInteger )
			],
			411 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			412 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			413 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableInteger )
			],
			414 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableInteger )
			],
			415 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			416 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			417 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			418 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			419 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableInteger )
			],
			420 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			421 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			422 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			423 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			424 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			425 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			426 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			427 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			428 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			429 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			430 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			431 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			432 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			433 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			434 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			435 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			436 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			437 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			438 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			439 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			440 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			441 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			442 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			443 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			444 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			445 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			446 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			447 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			448 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			449 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			450 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			451 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			452 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			453 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			454 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			455 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			456 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			457 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			458 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			459 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			460 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			461 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			462 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			463 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			464 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			465 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			466 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			467 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			468 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			469 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			470 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			471 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			472 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			473 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			474 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			475 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			476 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			477 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			478 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			479 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			480 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			481 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTime )
			],
			482 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTime )
			],
			483 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			484 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			485 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableDateTime )
			],
			486 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableDateTime )
			],
			487 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableDateTime )
			],
			488 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			489 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			490 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			491 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			492 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableDateTime )
			],
			493 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			494 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTime )
			],
			495 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTime )
			],
			496 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			497 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			498 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableDateTime )
			],
			499 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableDateTime )
			],
			500 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableDateTime )
			],
			501 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			502 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			503 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			504 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			505 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableDateTime )
			],
			506 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			507 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTime )
			],
			508 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTime )
			],
			509 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			510 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			511 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableDateTime )
			],
			512 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableDateTime )
			],
			513 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableDateTime )
			],
			514 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			515 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			516 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			517 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			518 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableDateTime )
			],
			519 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTime )
			],
			520 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			521 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			522 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			523 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			524 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			525 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			526 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			527 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			528 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			529 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			530 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			531 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			532 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			533 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			534 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			535 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			536 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			537 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			538 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			539 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			540 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			541 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			542 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			543 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			544 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			545 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			546 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			547 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			548 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			549 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			550 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			551 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			552 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			553 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			554 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			555 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			556 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			557 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			558 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			559 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			560 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			561 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			562 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			563 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			564 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			565 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			566 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			567 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			568 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			569 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			570 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			571 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			572 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			573 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			574 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			575 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			576 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			577 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			578 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			579 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			580 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			581 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			582 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			583 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			584 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			585 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			586 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			587 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			588 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			589 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			590 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			591 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			592 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			593 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			594 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			595 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableFloat )
			],
			596 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableFloat )
			],
			597 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableFloat )
			],
			598 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableFloat )
			],
			599 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableFloat )
			],
			600 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableFloat )
			],
			601 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableFloat )
			],
			602 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableFloat )
			],
			603 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableFloat )
			],
			604 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableFloat )
			],
			605 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableFloat )
			],
			606 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			607 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			608 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			609 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			610 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			611 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			612 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			613 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			614 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			615 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			616 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			617 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			618 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableInteger )
			],
			619 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableInteger )
			],
			620 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			621 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			622 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableInteger )
			],
			623 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableInteger )
			],
			624 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			625 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			626 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			627 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			628 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableInteger )
			],
			629 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableInteger )
			],
			630 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			631 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			632 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			633 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			634 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			635 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			636 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			637 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			638 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			639 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			640 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			641 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			642 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			643 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			644 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			645 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			646 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			647 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			648 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			649 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			650 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			651 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			652 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			653 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->nullableString )
			],
			654 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->null )
			],
			655 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->null )
			],
			656 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->null )
			],
			657 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->null )
			],
			658 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->null )
			],
			659 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->null )
			],
			660 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->null )
			],
			661 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->null )
			],
			662 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->null )
			],
			663 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->null )
			],
			664 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->null )
			],
			665 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->null )
			],
			666 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->null )
			],
			667 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			668 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			669 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			670 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			671 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			672 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			673 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			674 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			675 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			676 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			677 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue ), new ExpectedTypes()->string )
			],
			678 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			679 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue ), new ExpectedTypes()->string )
			]
		];
	}
}
