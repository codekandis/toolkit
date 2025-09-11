<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\UnitTests\BiDirectionalConverters;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeToNullableDateTimeStringBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\BiDirectionalConverters\NullableDateTimeToNullableDateTimeStringBiDirectionalConverterInterfaceTest\BiDirectionalConvertersWithInvalidFromValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Types\InvalidValueExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link NullableDateTimeToNullableDateTimeStringBiDirectionalConverterInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableDateTimeToNullableDateTimeStringBiDirectionalConverterInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link NullableDateTimeToNullableDateTimeStringBiDirectionalConverterInterface::convertFrom()} throws an {@link InvalidValueExceptionInterface} on an invalid value.
	 * @param NullableDateTimeToNullableDateTimeStringBiDirectionalConverterInterface $biDirectionalConverter The bidirectional converter to test.
	 * @param mixed $invalidFromValue The invalid from value to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( BiDirectionalConvertersWithInvalidFromValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodConvertFromThrowsInvalidValueExceptionInterfaceOnInvalidFromValue( NullableDateTimeToNullableDateTimeStringBiDirectionalConverterInterface $biDirectionalConverter, mixed $invalidFromValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$biDirectionalConverter->convertFrom( $invalidFromValue );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( InvalidValueExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}
}
