<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\BiDirectionalConverters\NullableBooleanToNullableBooleanIntegerBiDirectionalConverterInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanToNullableBooleanIntegerBiDirectionalConverter;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\Values;
use CodeKandis\Types\InvalidValueException;
use Override;
use function implode;
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
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidFromValue'           => $invalidFromValue = Values::INTEGER,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					implode( ' | ', Values::BOOLEAN_INTEGER_SET )
				)
			]
		];
	}
}
