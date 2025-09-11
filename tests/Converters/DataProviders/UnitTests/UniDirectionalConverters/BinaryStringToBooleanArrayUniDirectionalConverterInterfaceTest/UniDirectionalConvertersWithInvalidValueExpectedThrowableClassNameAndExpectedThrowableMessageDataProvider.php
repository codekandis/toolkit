<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\UniDirectionalConverters\BinaryStringToBooleanArrayUniDirectionalConverterInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BinaryStringToBooleanArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\Values;
use CodeKandis\Types\InvalidValueException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing unidirectional converters with invalid value, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class UniDirectionalConvertersWithInvalidValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::NULL_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::REG_EX_BINARY_STRING )
			],
			1  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::REG_EX_BINARY_STRING )
			],
			2  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::REG_EX_BINARY_STRING )
			],
			3  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::REG_EX_BINARY_STRING )
			],
			4  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::REG_EX_BINARY_STRING )
			],
			5  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::DATE_TIME_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::REG_EX_BINARY_STRING )
			],
			6  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::REG_EX_BINARY_STRING )
			],
			7  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::INTEGER_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::REG_EX_BINARY_STRING )
			],
			8  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::STRING_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::REG_EX_BINARY_STRING )
			],
			9  => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::CONSTANTS_INTERFACE_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::REG_EX_BINARY_STRING )
			],
			10 => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::CONSTANTS_CLASS_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::REG_EX_BINARY_STRING )
			]
		];
	}
}
