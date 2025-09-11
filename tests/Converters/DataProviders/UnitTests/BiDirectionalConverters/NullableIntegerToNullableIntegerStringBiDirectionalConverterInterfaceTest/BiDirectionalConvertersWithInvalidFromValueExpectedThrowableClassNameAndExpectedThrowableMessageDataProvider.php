<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\BiDirectionalConverters\NullableIntegerToNullableIntegerStringBiDirectionalConverterInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableIntegerToNullableIntegerStringBiDirectionalConverter;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\Values;
use CodeKandis\Types\InvalidValueException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing bidirectional converters with invalid from value, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class BiDirectionalConvertersWithInvalidFromValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidFromValue'           => $invalidFromValue = Values::NULL_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::REG_EX_INTEGER_STRING )
			],
			1 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::REG_EX_INTEGER_STRING )
			],
			2 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::REG_EX_INTEGER_STRING )
			],
			3 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidFromValue'           => $invalidFromValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::REG_EX_INTEGER_STRING )
			],
			4 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidFromValue'           => $invalidFromValue = Values::DATE_TIME_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::REG_EX_INTEGER_STRING )
			],
			5 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidFromValue'           => $invalidFromValue = Values::ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::REG_EX_INTEGER_STRING )
			],
			6 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidFromValue'           => $invalidFromValue = Values::INTEGER_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::REG_EX_INTEGER_STRING )
			],
			7 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidFromValue'           => $invalidFromValue = Values::STRING_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::REG_EX_INTEGER_STRING )
			],
			8 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidFromValue'           => $invalidFromValue = Values::CONSTANTS_INTERFACE_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::REG_EX_INTEGER_STRING )
			],
			9 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidFromValue'           => $invalidFromValue = Values::CONSTANTS_CLASS_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::REG_EX_INTEGER_STRING )
			]
		];
	}
}
