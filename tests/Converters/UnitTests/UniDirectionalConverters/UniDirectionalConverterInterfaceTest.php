<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\UnitTests\UniDirectionalConverters;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\UniDirectionalConverterInterface;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\UniDirectionalConverters\UniDirectionalConverterInterfaceTest\UniDirectionalConvertersWithInvalidTypedValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\UniDirectionalConverters\UniDirectionalConverterInterfaceTest\UniDirectionalConvertersWithValidValueAndExpectedConvertedValueDataProvider;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;
use function is_object;

/**
 * Represents the test case of {@link UniDirectionalConverterInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class UniDirectionalConverterInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link UniDirectionalConverterInterface::convert()} throws a {@link InvalidTypeExceptionInterface} on an invalid value type.
	 * @param UniDirectionalConverterInterface $uniDirectionalConverter The unidirectional converter to test.
	 * @param mixed $invalidTypedValue The invalid typed value to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( UniDirectionalConvertersWithInvalidTypedValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodConvertThrowsInvalidTypeExceptionInterfaceOnInvalidValueType( UniDirectionalConverterInterface $uniDirectionalConverter, mixed $invalidTypedValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$uniDirectionalConverter->convert( $invalidTypedValue );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( InvalidTypeExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if {@link UniDirectionalConverterInterface::convert()} converts a valid value correctly.
	 * @param UniDirectionalConverterInterface $uniDirectionalConverter The unidirectional converter to test.
	 * @param mixed $validValue The valid value to pass.
	 * @param mixed $expectedConvertedValue The expected converted value.
	 */
	#[DataProviderExternal( UniDirectionalConvertersWithValidValueAndExpectedConvertedValueDataProvider::class, 'provideData' )]
	public function testIfMethodConvertConvertsValidValueCorrectly( UniDirectionalConverterInterface $uniDirectionalConverter, mixed $validValue, mixed $expectedConvertedValue ): void
	{
		$resultedConvertedValue = $uniDirectionalConverter->convert( $validValue );

		if ( false === is_object( $resultedConvertedValue ) )
		{
			static::assertSame( $expectedConvertedValue, $resultedConvertedValue );
		}
		else
		{
			static::assertEquals( $expectedConvertedValue, $resultedConvertedValue );
		}
	}
}
