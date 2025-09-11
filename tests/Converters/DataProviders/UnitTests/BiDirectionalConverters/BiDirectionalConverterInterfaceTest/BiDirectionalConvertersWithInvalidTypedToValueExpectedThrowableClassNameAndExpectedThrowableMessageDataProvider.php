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
 * Represents a data provider providing bidirectional converters with invalid typed to value, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class BiDirectionalConvertersWithInvalidTypedToValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
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
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			1   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			2   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			3   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			4   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			5   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			6   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			7   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			8   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			9   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			10  => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			11  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			12  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			13  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			14  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			15  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			16  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			17  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			18  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			19  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			20  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			21  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			22  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			23  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->booleanArray )
			],
			24  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->booleanArray )
			],
			25  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->booleanArray )
			],
			26  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->booleanArray )
			],
			27  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->booleanArray )
			],
			28  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->booleanArray )
			],
			29  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->booleanArray )
			],
			30  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->booleanArray )
			],
			31  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->booleanArray )
			],
			32  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->booleanArray )
			],
			33  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->booleanArray )
			],
			34  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->booleanArray )
			],
			35  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->booleanArray )
			],
			36  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			37  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			38  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			39  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			40  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			41  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			42  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			43  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			44  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			45  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			46  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			47  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			48  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			49  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->integer )
			],
			50  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->integer )
			],
			51  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->integer )
			],
			52  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			53  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			54  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->integer )
			],
			55  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->integer )
			],
			56  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			57  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			58  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			59  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			60  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->integer )
			],
			61  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			62  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			63  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			64  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			65  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			66  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			67  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			68  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			69  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			70  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			71  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			72  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			73  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			74  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			75  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->boolean )
			],
			76  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->boolean )
			],
			77  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->boolean )
			],
			78  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->boolean )
			],
			79  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->boolean )
			],
			80  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->boolean )
			],
			81  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->boolean )
			],
			82  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->boolean )
			],
			83  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->boolean )
			],
			84  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->boolean )
			],
			85  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->boolean )
			],
			86  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->boolean )
			],
			87  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->boolean )
			],
			88  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->boolean )
			],
			89  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->boolean )
			],
			90  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->boolean )
			],
			91  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->boolean )
			],
			92  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->boolean )
			],
			93  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->boolean )
			],
			94  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->boolean )
			],
			95  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->boolean )
			],
			96  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->boolean )
			],
			97  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->boolean )
			],
			98  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->boolean )
			],
			99  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->boolean )
			],
			100 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->boolean )
			],
			101 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->boolean )
			],
			102 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->boolean )
			],
			103 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->boolean )
			],
			104 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->boolean )
			],
			105 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->boolean )
			],
			106 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->boolean )
			],
			107 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->boolean )
			],
			108 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->boolean )
			],
			109 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->boolean )
			],
			110 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->boolean )
			],
			111 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->dateTimeImmutable )
			],
			112 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTimeImmutable )
			],
			113 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTimeImmutable )
			],
			114 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			115 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			116 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->dateTimeImmutable )
			],
			117 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->dateTimeImmutable )
			],
			118 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->dateTimeImmutable )
			],
			119 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			120 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			121 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			122 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			123 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->dateTimeImmutable )
			],
			124 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			125 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->dateTimeImmutable )
			],
			126 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTimeImmutable )
			],
			127 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTimeImmutable )
			],
			128 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			129 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			130 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->dateTimeImmutable )
			],
			131 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->dateTimeImmutable )
			],
			132 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->dateTimeImmutable )
			],
			133 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			134 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			135 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			136 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			137 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->dateTimeImmutable )
			],
			138 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			139 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->dateTimeImmutable )
			],
			140 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTimeImmutable )
			],
			141 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTimeImmutable )
			],
			142 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			143 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			144 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->dateTimeImmutable )
			],
			145 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->dateTimeImmutable )
			],
			146 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->dateTimeImmutable )
			],
			147 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			148 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			149 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			150 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			151 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->dateTimeImmutable )
			],
			152 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTimeImmutable )
			],
			153 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			154 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			155 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			156 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			157 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			158 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			159 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			160 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			161 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			162 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			163 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			164 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			165 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			166 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			167 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			168 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			169 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			170 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			171 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			172 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			173 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			174 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			175 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			176 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			177 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			178 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			179 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			180 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			181 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			182 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			183 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			184 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			185 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			186 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			187 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			188 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			189 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			190 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			191 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			192 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			193 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			194 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			195 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			196 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			197 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			198 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			199 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			200 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			201 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			202 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			203 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			204 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			205 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			206 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			207 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			208 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			209 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			210 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			211 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			212 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			213 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			214 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			215 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			216 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			217 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			218 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			219 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			220 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			221 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			222 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			223 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			224 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			225 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			226 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			227 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			228 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			229 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			230 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			231 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->dateTime )
			],
			232 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTime )
			],
			233 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTime )
			],
			234 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			235 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			236 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->dateTime )
			],
			237 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->dateTime )
			],
			238 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->dateTime )
			],
			239 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			240 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			241 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			242 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			243 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->dateTime )
			],
			244 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			245 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->dateTime )
			],
			246 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTime )
			],
			247 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTime )
			],
			248 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			249 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			250 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->dateTime )
			],
			251 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->dateTime )
			],
			252 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->dateTime )
			],
			253 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			254 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			255 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			256 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			257 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->dateTime )
			],
			258 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			259 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->dateTime )
			],
			260 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTime )
			],
			261 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->dateTime )
			],
			262 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			263 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			264 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->dateTime )
			],
			265 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->dateTime )
			],
			266 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->dateTime )
			],
			267 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			268 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			269 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			270 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			271 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->dateTime )
			],
			272 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->dateTime )
			],
			273 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			274 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			275 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			276 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			277 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			278 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			279 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			280 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			281 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			282 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			283 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			284 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			285 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			286 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->float )
			],
			287 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->float )
			],
			288 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->float )
			],
			289 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->float )
			],
			290 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->float )
			],
			291 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->float )
			],
			292 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->float )
			],
			293 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->float )
			],
			294 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->float )
			],
			295 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->float )
			],
			296 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->float )
			],
			297 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->float )
			],
			298 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			299 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			300 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			301 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			302 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			303 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			304 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			305 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			306 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			307 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			308 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			309 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			310 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			311 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->integer )
			],
			312 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->integer )
			],
			313 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->integer )
			],
			314 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			315 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			316 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->integer )
			],
			317 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->integer )
			],
			318 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			319 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			320 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			321 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			322 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->integer )
			],
			323 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			324 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->integer )
			],
			325 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->integer )
			],
			326 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->integer )
			],
			327 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			328 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			329 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->integer )
			],
			330 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->integer )
			],
			331 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			332 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			333 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			334 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			335 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->integer )
			],
			336 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->integer )
			],
			337 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			338 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			339 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			340 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			341 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			342 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			343 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			344 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			345 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			346 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			347 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			348 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			349 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			350 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			351 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			352 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			353 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			354 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			355 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			356 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			357 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			358 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			359 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			360 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			361 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBooleanArray )
			],
			362 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			363 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			364 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableBooleanArray )
			],
			365 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableBooleanArray )
			],
			366 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableBooleanArray )
			],
			367 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			368 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			369 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			370 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			371 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableBooleanArray )
			],
			372 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableBooleanArray )
			],
			373 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			374 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			375 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			376 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			377 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			378 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			379 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			380 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			381 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			382 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			383 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			384 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			385 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableInteger )
			],
			386 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableInteger )
			],
			387 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			388 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			389 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableInteger )
			],
			390 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableInteger )
			],
			391 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			392 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			393 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			394 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			395 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableInteger )
			],
			396 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			397 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			398 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			399 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			400 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			401 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			402 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			403 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			404 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			405 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			406 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			407 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			408 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			409 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBoolean )
			],
			410 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBoolean )
			],
			411 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableBoolean )
			],
			412 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableBoolean )
			],
			413 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableBoolean )
			],
			414 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableBoolean )
			],
			415 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableBoolean )
			],
			416 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableBoolean )
			],
			417 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableBoolean )
			],
			418 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableBoolean )
			],
			419 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableBoolean )
			],
			420 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBoolean )
			],
			421 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBoolean )
			],
			422 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableBoolean )
			],
			423 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableBoolean )
			],
			424 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableBoolean )
			],
			425 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableBoolean )
			],
			426 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableBoolean )
			],
			427 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableBoolean )
			],
			428 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableBoolean )
			],
			429 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableBoolean )
			],
			430 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableBoolean )
			],
			431 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBoolean )
			],
			432 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableBoolean )
			],
			433 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableBoolean )
			],
			434 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableBoolean )
			],
			435 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableBoolean )
			],
			436 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableBoolean )
			],
			437 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableBoolean )
			],
			438 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableBoolean )
			],
			439 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableBoolean )
			],
			440 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableBoolean )
			],
			441 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableBoolean )
			],
			442 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			443 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			444 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			445 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			446 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			447 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			448 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			449 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			450 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			451 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			452 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			453 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			454 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			455 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			456 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			457 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			458 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			459 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			460 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			461 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			462 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			463 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			464 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			465 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			466 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			467 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			468 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			469 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			470 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			471 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			472 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			473 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			474 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			475 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			476 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			477 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			478 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			479 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableDateTimeImmutable )
			],
			480 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTimeImmutable )
			],
			481 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			482 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			483 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			484 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			485 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			486 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			487 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			488 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			489 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			490 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			491 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			492 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			493 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			494 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			495 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			496 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			497 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			498 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			499 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			500 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			501 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			502 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			503 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			504 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			505 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			506 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			507 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			508 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			509 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			510 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			511 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			512 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			513 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			514 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			515 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			516 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			517 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			518 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			519 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			520 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			521 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			522 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			523 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			524 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			525 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			526 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			527 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			528 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			529 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			530 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			531 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			532 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			533 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			534 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			535 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			536 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			537 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			538 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			539 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			540 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			541 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			542 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			543 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			544 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			545 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			546 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			547 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			548 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			549 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			550 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			551 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			552 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			553 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTime )
			],
			554 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTime )
			],
			555 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			556 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			557 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableDateTime )
			],
			558 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableDateTime )
			],
			559 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableDateTime )
			],
			560 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			561 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			562 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			563 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			564 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableDateTime )
			],
			565 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			566 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTime )
			],
			567 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTime )
			],
			568 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			569 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			570 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableDateTime )
			],
			571 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableDateTime )
			],
			572 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableDateTime )
			],
			573 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			574 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			575 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			576 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			577 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableDateTime )
			],
			578 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			579 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTime )
			],
			580 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableDateTime )
			],
			581 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			582 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			583 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableDateTime )
			],
			584 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableDateTime )
			],
			585 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableDateTime )
			],
			586 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			587 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			588 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			589 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			590 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableDateTime )
			],
			591 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableDateTime )
			],
			592 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			593 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			594 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			595 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			596 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			597 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			598 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			599 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			600 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			601 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			602 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			603 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			604 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableFloat )
			],
			605 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableFloat )
			],
			606 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableFloat )
			],
			607 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableFloat )
			],
			608 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableFloat )
			],
			609 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableFloat )
			],
			610 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableFloat )
			],
			611 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableFloat )
			],
			612 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableFloat )
			],
			613 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableFloat )
			],
			614 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableFloat )
			],
			615 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			616 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableString )
			],
			617 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			618 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			619 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->nullableString )
			],
			620 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableString )
			],
			621 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			622 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			623 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			624 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			625 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableString )
			],
			626 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableString )
			],
			627 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableInteger )
			],
			628 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableInteger )
			],
			629 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			630 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			631 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableInteger )
			],
			632 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableInteger )
			],
			633 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			634 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			635 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			636 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			637 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableInteger )
			],
			638 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			639 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableInteger )
			],
			640 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->nullableInteger )
			],
			641 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			642 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			643 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->nullableInteger )
			],
			644 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->nullableInteger )
			],
			645 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			646 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			647 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			648 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			649 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->nullableInteger )
			],
			650 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->nullableInteger )
			],
			651 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, new ExpectedTypes()->string )
			],
			652 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			653 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->string )
			],
			654 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			655 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			656 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->string )
			],
			657 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->string )
			],
			658 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			659 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			660 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			661 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			662 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->string )
			],
			663 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->string )
			],
			664 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->null )
			],
			665 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, new ExpectedTypes()->null )
			],
			666 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->null )
			],
			667 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue ), new ExpectedTypes()->null )
			],
			668 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, new ExpectedTypes()->null )
			],
			669 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, new ExpectedTypes()->null )
			],
			670 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, new ExpectedTypes()->null )
			],
			671 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->null )
			],
			672 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::INTEGER_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->null )
			],
			673 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::STRING_BACKED_ENUM,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->null )
			],
			674 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue ), new ExpectedTypes()->null )
			],
			675 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, new ExpectedTypes()->null )
			],
			676 => [
				'biDirectionalConverter'     => new NullToNullStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES, Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue ), new ExpectedTypes()->null )
			]
		];
	}
}
