<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\UniDirectionalConverters\DateTimeStringToDateTimeImmutableUniDirectionalConverterInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\DateTimeStringToDateTimeImmutableUniDirectionalConverter;
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
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::NULL_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			1  => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			2  => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			3  => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			4  => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			5  => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			6  => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			7  => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			8  => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			9  => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::INTEGER_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			10 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::STRING_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			11 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::CONSTANTS_INTERFACE_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			12 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::CONSTANTS_CLASS_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			13 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::NULL_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			14 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			15 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			16 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			17 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			18 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			19 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			20 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			21 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			22 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::INTEGER_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			23 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::STRING_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			24 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::CONSTANTS_INTERFACE_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			25 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::CONSTANTS_CLASS_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			26 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::NULL_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			27 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			28 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			29 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			30 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			31 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			32 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			33 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			34 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			35 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::INTEGER_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			36 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::STRING_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			37 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::CONSTANTS_INTERFACE_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			],
			38 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::CONSTANTS_CLASS_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::createDateTimeString( $format ) )
			]
		];
	}
}
