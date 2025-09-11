<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\UnitTests\BiDirectionalConverters;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanIntegerToNullableBooleanBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\BiDirectionalConverters\NullableBooleanIntegerToNullableBooleanBiDirectionalConverterInterfaceTest\BiDirectionalConvertersWithInvalidToValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Types\InvalidValueExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link NullableBooleanIntegerToNullableBooleanBiDirectionalConverterInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBooleanIntegerToNullableBooleanBiDirectionalConverterInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link NullableBooleanIntegerToNullableBooleanBiDirectionalConverterInterface::convertTo()} throws an {@link InvalidValueExceptionInterface} on an invalid value.
	 * @param NullableBooleanIntegerToNullableBooleanBiDirectionalConverterInterface $biDirectionalConverter The bidirectional converter to test.
	 * @param mixed $invalidToValue The invalid to value to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( BiDirectionalConvertersWithInvalidToValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodConvertToThrowsInvalidValueExceptionInterfaceOnInvalidToValue( NullableBooleanIntegerToNullableBooleanBiDirectionalConverterInterface $biDirectionalConverter, mixed $invalidToValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$biDirectionalConverter->convertTo( $invalidToValue );
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
