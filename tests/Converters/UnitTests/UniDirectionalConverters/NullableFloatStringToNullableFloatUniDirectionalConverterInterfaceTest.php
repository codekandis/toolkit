<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\UnitTests\UniDirectionalConverters;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableFloatStringToNullableFloatUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\UniDirectionalConverters\NullableFloatStringToNullableFloatUniDirectionalConverterInterfaceTest\UniDirectionalConvertersWithInvalidValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Types\InvalidValueExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link NullableFloatStringToNullableFloatUniDirectionalConverterInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableFloatStringToNullableFloatUniDirectionalConverterInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link NullableFloatStringToNullableFloatUniDirectionalConverterInterface::convert()} throws an {@link InvalidValueExceptionInterface} on an invalid value.
	 * @param NullableFloatStringToNullableFloatUniDirectionalConverterInterface $uniDirectionalConverter The unidirectional converter to test.
	 * @param mixed $invalidValue The invalid value to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( UniDirectionalConvertersWithInvalidValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodConvertThrowsInvalidValueExceptionInterfaceOnInvalidValue( NullableFloatStringToNullableFloatUniDirectionalConverterInterface $uniDirectionalConverter, mixed $invalidValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$uniDirectionalConverter->convert( $invalidValue );
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
