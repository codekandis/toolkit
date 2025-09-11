<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\BiDirectionalConverters\NullableBooleanIntegerToNullableBooleanBiDirectionalConverterInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanIntegerToNullableBooleanBiDirectionalConverter;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\Values;
use CodeKandis\Types\InvalidValueException;
use Override;
use function implode;
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
			0 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::INTEGER,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidToValue,
					implode( ' | ', Values::BOOLEAN_INTEGER_SET )
				)
			]
		];
	}
}
