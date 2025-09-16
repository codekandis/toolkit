<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\BiDirectionalConverters\NullStringToNullBiDirectionalConverterInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullStringToNullBiDirectionalConverter;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\Values;
use CodeKandis\Types\InvalidValueException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing bidirectional converters with invalid to value, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class BiDirectionalConvertersWithInvalidToValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::NULL_STRING )
			],
			1  => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::NULL_STRING )
			],
			2  => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::NULL_STRING )
			],
			3  => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::NULL_STRING )
			],
			4  => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::NULL_STRING )
			],
			5  => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::NULL_STRING )
			],
			6  => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::NULL_STRING )
			],
			7  => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::DATE_TIME_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::NULL_STRING )
			],
			8  => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::NULL_STRING )
			],
			9  => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::INTEGER_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::NULL_STRING )
			],
			10 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::STRING_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::NULL_STRING )
			],
			11 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::CONSTANTS_INTERFACE_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::NULL_STRING )
			],
			12 => [
				'biDirectionalConverter'     => new NullStringToNullBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::CONSTANTS_CLASS_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::NULL_STRING )
			]
		];
	}
}
