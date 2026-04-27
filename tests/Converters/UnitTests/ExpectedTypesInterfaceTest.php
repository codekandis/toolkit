<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Converters\ExpectedTypesInterface;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ExpectedTypesInterfaceTest\ExpectedTypesWithExpectedBooleanArrayValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ExpectedTypesInterfaceTest\ExpectedTypesWithExpectedBooleanValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ExpectedTypesInterfaceTest\ExpectedTypesWithExpectedDateTimeImmutableValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ExpectedTypesInterfaceTest\ExpectedTypesWithExpectedDateTimeValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ExpectedTypesInterfaceTest\ExpectedTypesWithExpectedFloatValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ExpectedTypesInterfaceTest\ExpectedTypesWithExpectedIntegerValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ExpectedTypesInterfaceTest\ExpectedTypesWithExpectedNullableBooleanArrayValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ExpectedTypesInterfaceTest\ExpectedTypesWithExpectedNullableBooleanValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ExpectedTypesInterfaceTest\ExpectedTypesWithExpectedNullableDateTimeImmutableValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ExpectedTypesInterfaceTest\ExpectedTypesWithExpectedNullableDateTimeValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ExpectedTypesInterfaceTest\ExpectedTypesWithExpectedNullableFloatValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ExpectedTypesInterfaceTest\ExpectedTypesWithExpectedNullableIntegerValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ExpectedTypesInterfaceTest\ExpectedTypesWithExpectedNullableStringValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ExpectedTypesInterfaceTest\ExpectedTypesWithExpectedNullValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ExpectedTypesInterfaceTest\ExpectedTypesWithExpectedStringValueDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link ExpectedTypesInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ExpectedTypesInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link ExpectedTypesInterface::$null} returns the value correctly.
	 * @param ExpectedTypesInterface $expectedTypes The expected types to test.
	 * @param string $expectedNullValue The expected `null` value.
	 */
	#[DataProviderExternal( ExpectedTypesWithExpectedNullValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsNullValueCorrectly( ExpectedTypesInterface $expectedTypes, string $expectedNullValue ): void
	{
		$resultedNullValue = $expectedTypes->null;

		static::assertEquals( $expectedNullValue, $resultedNullValue );
	}

	/**
	 * Tests if {@link ExpectedTypesInterface::$boolean} returns the value correctly.
	 * @param ExpectedTypesInterface $expectedTypes The expected types to test.
	 * @param string $expectedBooleanValue The expected `boolean` value.
	 */
	#[DataProviderExternal( ExpectedTypesWithExpectedBooleanValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsBooleanValueCorrectly( ExpectedTypesInterface $expectedTypes, string $expectedBooleanValue ): void
	{
		$resultedBooleanValue = $expectedTypes->boolean;

		static::assertEquals( $expectedBooleanValue, $resultedBooleanValue );
	}

	/**
	 * Tests if {@link ExpectedTypesInterface::$nullableBoolean} returns the value correctly.
	 * @param ExpectedTypesInterface $expectedTypes The expected types to test.
	 * @param string $expectedNullableBooleanValue The expected `nullableBoolean` value.
	 */
	#[DataProviderExternal( ExpectedTypesWithExpectedNullableBooleanValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsNullableBooleanValueCorrectly( ExpectedTypesInterface $expectedTypes, string $expectedNullableBooleanValue ): void
	{
		$resultedNullableBooleanValue = $expectedTypes->nullableBoolean;

		static::assertEquals( $expectedNullableBooleanValue, $resultedNullableBooleanValue );
	}

	/**
	 * Tests if {@link ExpectedTypesInterface::$booleanArray} returns the value correctly.
	 * @param ExpectedTypesInterface $expectedTypes The expected types to test.
	 * @param string $expectedBooleanArrayValue The expected `booleanArray` value.
	 */
	#[DataProviderExternal( ExpectedTypesWithExpectedBooleanArrayValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsBooleanArrayValueCorrectly( ExpectedTypesInterface $expectedTypes, string $expectedBooleanArrayValue ): void
	{
		$resultedBooleanArrayValue = $expectedTypes->booleanArray;

		static::assertEquals( $expectedBooleanArrayValue, $resultedBooleanArrayValue );
	}

	/**
	 * Tests if {@link ExpectedTypesInterface::$nullableBooleanArray} returns the value correctly.
	 * @param ExpectedTypesInterface $expectedTypes The expected types to test.
	 * @param string $expectedNullableBooleanArrayValue The expected `nullableBooleanArray` value.
	 */
	#[DataProviderExternal( ExpectedTypesWithExpectedNullableBooleanArrayValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsNullableBooleanArrayValueCorrectly( ExpectedTypesInterface $expectedTypes, string $expectedNullableBooleanArrayValue ): void
	{
		$resultedNullableBooleanArrayValue = $expectedTypes->nullableBooleanArray;

		static::assertEquals( $expectedNullableBooleanArrayValue, $resultedNullableBooleanArrayValue );
	}

	/**
	 * Tests if {@link ExpectedTypesInterface::$integer} returns the value correctly.
	 * @param ExpectedTypesInterface $expectedTypes The expected types to test.
	 * @param string $expectedIntegerValue The expected `integer` value.
	 */
	#[DataProviderExternal( ExpectedTypesWithExpectedIntegerValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsIntegerValueCorrectly( ExpectedTypesInterface $expectedTypes, string $expectedIntegerValue ): void
	{
		$resultedIntegerValue = $expectedTypes->integer;

		static::assertEquals( $expectedIntegerValue, $resultedIntegerValue );
	}

	/**
	 * Tests if {@link ExpectedTypesInterface::$nullableInteger} returns the value correctly.
	 * @param ExpectedTypesInterface $expectedTypes The expected types to test.
	 * @param string $expectedNullableIntegerValue The expected `nullableInteger` value.
	 */
	#[DataProviderExternal( ExpectedTypesWithExpectedNullableIntegerValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsNullableIntegerValueCorrectly( ExpectedTypesInterface $expectedTypes, string $expectedNullableIntegerValue ): void
	{
		$resultedNullableIntegerValue = $expectedTypes->nullableInteger;

		static::assertEquals( $expectedNullableIntegerValue, $resultedNullableIntegerValue );
	}

	/**
	 * Tests if {@link ExpectedTypesInterface::$float} returns the value correctly.
	 * @param ExpectedTypesInterface $expectedTypes The expected types to test.
	 * @param string $expectedFloatValue The expected `float` value.
	 */
	#[DataProviderExternal( ExpectedTypesWithExpectedFloatValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsFloatValueCorrectly( ExpectedTypesInterface $expectedTypes, string $expectedFloatValue ): void
	{
		$resultedFloatValue = $expectedTypes->float;

		static::assertEquals( $expectedFloatValue, $resultedFloatValue );
	}

	/**
	 * Tests if {@link ExpectedTypesInterface::$nullableFloat} returns the value correctly.
	 * @param ExpectedTypesInterface $expectedTypes The expected types to test.
	 * @param string $expectedNullableFloatValue The expected `nullableFloat` value.
	 */
	#[DataProviderExternal( ExpectedTypesWithExpectedNullableFloatValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsNullableFloatValueCorrectly( ExpectedTypesInterface $expectedTypes, string $expectedNullableFloatValue ): void
	{
		$resultedNullableFloatValue = $expectedTypes->nullableFloat;

		static::assertEquals( $expectedNullableFloatValue, $resultedNullableFloatValue );
	}

	/**
	 * Tests if {@link ExpectedTypesInterface::$string} returns the value correctly.
	 * @param ExpectedTypesInterface $expectedTypes The expected types to test.
	 * @param string $expectedStringValue The expected `string` value.
	 */
	#[DataProviderExternal( ExpectedTypesWithExpectedStringValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsStringValueCorrectly( ExpectedTypesInterface $expectedTypes, string $expectedStringValue ): void
	{
		$resultedStringValue = $expectedTypes->string;

		static::assertEquals( $expectedStringValue, $resultedStringValue );
	}

	/**
	 * Tests if {@link ExpectedTypesInterface::$nullableString} returns the value correctly.
	 * @param ExpectedTypesInterface $expectedTypes The expected types to test.
	 * @param string $expectedNullableStringValue The expected `nullableString` value.
	 */
	#[DataProviderExternal( ExpectedTypesWithExpectedNullableStringValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsNullableStringValueCorrectly( ExpectedTypesInterface $expectedTypes, string $expectedNullableStringValue ): void
	{
		$resultedNullableStringValue = $expectedTypes->nullableString;

		static::assertEquals( $expectedNullableStringValue, $resultedNullableStringValue );
	}

	/**
	 * Tests if {@link ExpectedTypesInterface::$dateTimeImmutable} returns the value correctly.
	 * @param ExpectedTypesInterface $expectedTypes The expected types to test.
	 * @param string $expectedDateTimeImmutableValue The expected `dateTimeImmutable` value.
	 */
	#[DataProviderExternal( ExpectedTypesWithExpectedDateTimeImmutableValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsDateTimeImmutableValueCorrectly( ExpectedTypesInterface $expectedTypes, string $expectedDateTimeImmutableValue ): void
	{
		$resultedDateTimeImmutableValue = $expectedTypes->dateTimeImmutable;

		static::assertEquals( $expectedDateTimeImmutableValue, $resultedDateTimeImmutableValue );
	}

	/**
	 * Tests if {@link ExpectedTypesInterface::$nullableDateTimeImmutable} returns the value correctly.
	 * @param ExpectedTypesInterface $expectedTypes The expected types to test.
	 * @param string $expectedNullableDateTimeImmutableValue The expected `nullableDateTimeImmutable` value.
	 */
	#[DataProviderExternal( ExpectedTypesWithExpectedNullableDateTimeImmutableValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsNullableDateTimeImmutableValueCorrectly( ExpectedTypesInterface $expectedTypes, string $expectedNullableDateTimeImmutableValue ): void
	{
		$resultedNullableDateTimeImmutableValue = $expectedTypes->nullableDateTimeImmutable;

		static::assertEquals( $expectedNullableDateTimeImmutableValue, $resultedNullableDateTimeImmutableValue );
	}

	/**
	 * Tests if {@link ExpectedTypesInterface::$dateTime} returns the value correctly.
	 * @param ExpectedTypesInterface $expectedTypes The expected types to test.
	 * @param string $expectedDateTimeValue The expected `dateTime` value.
	 */
	#[DataProviderExternal( ExpectedTypesWithExpectedDateTimeValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsDateTimeValueCorrectly( ExpectedTypesInterface $expectedTypes, string $expectedDateTimeValue ): void
	{
		$resultedDateTimeValue = $expectedTypes->dateTime;

		static::assertEquals( $expectedDateTimeValue, $resultedDateTimeValue );
	}

	/**
	 * Tests if {@link ExpectedTypesInterface::$nullableDateTime} returns the value correctly.
	 * @param ExpectedTypesInterface $expectedTypes The expected types to test.
	 * @param string $expectedNullableDateTimeValue The expected `nullableDateTime` value.
	 */
	#[DataProviderExternal( ExpectedTypesWithExpectedNullableDateTimeValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsNullableDateTimeValueCorrectly( ExpectedTypesInterface $expectedTypes, string $expectedNullableDateTimeValue ): void
	{
		$resultedNullableDateTimeValue = $expectedTypes->nullableDateTime;

		static::assertEquals( $expectedNullableDateTimeValue, $resultedNullableDateTimeValue );
	}
}
