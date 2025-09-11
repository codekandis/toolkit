<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\UniDirectionalConverters\NullableClassConstantsToNullableArrayUniDirectionalConverterInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableClassConstantsToNullableArrayUniDirectionalConverter;
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
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::NULL_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::CLASS_NAME_VALUE )
			],
			1  => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::CLASS_NAME_VALUE )
			],
			2  => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::CLASS_NAME_VALUE )
			],
			3  => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::CLASS_NAME_VALUE )
			],
			4  => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::CLASS_NAME_VALUE )
			],
			5  => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::CLASS_NAME_VALUE )
			],
			6  => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::CLASS_NAME_VALUE )
			],
			7  => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::CLASS_NAME_VALUE )
			],
			8  => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::DATE_TIME_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::CLASS_NAME_VALUE )
			],
			9  => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::CLASS_NAME_VALUE )
			],
			10 => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::INTEGER_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::CLASS_NAME_VALUE )
			],
			11 => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::STRING_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::CLASS_NAME_VALUE )
			],
			12 => [
				'uniDirectionalConverter'    => new NullableClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::CONSTANTS_INTERFACE_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::CLASS_NAME_VALUE )
			]
		];
	}
}
