<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\UniDirectionalConverters\NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverterInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter;
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
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::NULL_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::INTERFACE_OR_CLASS_NAME_VALUE )
			],
			1  => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::INTERFACE_OR_CLASS_NAME_VALUE )
			],
			2  => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::INTERFACE_OR_CLASS_NAME_VALUE )
			],
			3  => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::INTERFACE_OR_CLASS_NAME_VALUE )
			],
			4  => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::INTERFACE_OR_CLASS_NAME_VALUE )
			],
			5  => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::INTERFACE_OR_CLASS_NAME_VALUE )
			],
			6  => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::INTERFACE_OR_CLASS_NAME_VALUE )
			],
			7  => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::INTERFACE_OR_CLASS_NAME_VALUE )
			],
			8  => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::DATE_TIME_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::INTERFACE_OR_CLASS_NAME_VALUE )
			],
			9  => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::INTERFACE_OR_CLASS_NAME_VALUE )
			],
			10 => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::INTEGER_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::INTERFACE_OR_CLASS_NAME_VALUE )
			],
			11 => [
				'uniDirectionalConverter'    => new NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::STRING_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::INTERFACE_OR_CLASS_NAME_VALUE )
			]
		];
	}
}
