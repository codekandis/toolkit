<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\BiDirectionalConverters\BooleanArrayToBinaryStringBiDirectionalConverterInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanArrayToBinaryStringBiDirectionalConverter;
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
			0
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::nullString,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::regExBinaryString )
			],
			1
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::booleanStringFalse,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::regExBinaryString )
			],
			2
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::booleanStringTrue,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::regExBinaryString )
			],
			3
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::integerString,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::regExBinaryString )
			],
			4
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::floatString,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::regExBinaryString )
			],
			5
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::dateTimeString,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::regExBinaryString )
			],
			6
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::constantsInterfaceName,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::regExBinaryString )
			],
			7
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::constantsClassName,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::regExBinaryString )
			],
			8
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::enumName,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::regExBinaryString )
			],
			9
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::integerBackedEnumName,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::regExBinaryString )
			],
			10
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::stringBackedEnumName,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::regExBinaryString )
			]
		]
	}
}
