<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\BiDirectionalConverters\DateTimeImmutableToDateTimeStringBiDirectionalConverterInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeImmutableToDateTimeStringBiDirectionalConverter;
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
			0  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidFromValue'           => $invalidFromValue = Values::NULL_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			1  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			2  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			3  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			4  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			5  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidFromValue'           => $invalidFromValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			6  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidFromValue'           => $invalidFromValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			7  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidFromValue'           => $invalidFromValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			8  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidFromValue'           => $invalidFromValue = Values::ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			9  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidFromValue'           => $invalidFromValue = Values::INTEGER_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			10 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidFromValue'           => $invalidFromValue = Values::STRING_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			11 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidFromValue'           => $invalidFromValue = Values::CONSTANTS_INTERFACE_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			12 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT ),
				'invalidFromValue'           => $invalidFromValue = Values::CONSTANTS_CLASS_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			13 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidFromValue'           => $invalidFromValue = Values::NULL_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			14 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			15 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			16 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			17 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			18 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidFromValue'           => $invalidFromValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			19 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidFromValue'           => $invalidFromValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			20 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidFromValue'           => $invalidFromValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			21 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidFromValue'           => $invalidFromValue = Values::ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			22 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidFromValue'           => $invalidFromValue = Values::INTEGER_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			23 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidFromValue'           => $invalidFromValue = Values::STRING_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			24 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidFromValue'           => $invalidFromValue = Values::CONSTANTS_INTERFACE_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			25 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATE_TIME_FORMAT, Values::NULL ),
				'invalidFromValue'           => $invalidFromValue = Values::CONSTANTS_CLASS_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			26 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidFromValue'           => $invalidFromValue = Values::NULL_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			27 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			28 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			29 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			30 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			31 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidFromValue'           => $invalidFromValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			32 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidFromValue'           => $invalidFromValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			33 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidFromValue'           => $invalidFromValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			34 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidFromValue'           => $invalidFromValue = Values::ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			35 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidFromValue'           => $invalidFromValue = Values::INTEGER_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			36 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidFromValue'           => $invalidFromValue = Values::STRING_BACKED_ENUM_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			37 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidFromValue'           => $invalidFromValue = Values::CONSTANTS_INTERFACE_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			],
			38 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					$format = Values::DATE_TIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidFromValue'           => $invalidFromValue = Values::CONSTANTS_CLASS_NAME,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidFromValue, Values::createDateTimeString( $format ) )
			]
		];
	}
}
