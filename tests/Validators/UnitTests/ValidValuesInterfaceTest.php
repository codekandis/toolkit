<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedBooleanIntegerFalseValueDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedBooleanIntegerSetValueDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedBooleanIntegerStringFalseValueDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedBooleanIntegerStringSetValueDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedBooleanIntegerStringTrueValueDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedBooleanIntegerTrueValueDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedBooleanStringFalseValueDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedBooleanStringSetValueDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedBooleanStringTrueValueDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedNullStringValueDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedNullValueDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedRegExBinaryStringValueDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedRegExFloatStringValueDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedRegExIntegerStringValueDataProvider;
use CodeKandis\ToolKit\Validators\ValidValuesInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link ValidValuesInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidValuesInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link ValidValuesInterface::$null} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param null $expectedNullValue The expected `null` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedNullValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsNullValueCorrectly( ValidValuesInterface $validValues, null $expectedNullValue ): void
	{
		$resultedNullValue = $validValues->null;

		static::assertEquals( $expectedNullValue, $resultedNullValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$nullString} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param string $expectedNullStringValue The expected `nullString` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedNullStringValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsNullStringValueCorrectly( ValidValuesInterface $validValues, string $expectedNullStringValue ): void
	{
		$resultedNullStringValue = $validValues->nullString;

		static::assertEquals( $expectedNullStringValue, $resultedNullStringValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$booleanIntegerFalse} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param int $expectedBooleanIntegerFalseValue The expected `booleanIntegerFalse` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedBooleanIntegerFalseValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsBooleanIntegerFalseValueCorrectly( ValidValuesInterface $validValues, int $expectedBooleanIntegerFalseValue ): void
	{
		$resultedBooleanIntegerFalseValue = $validValues->booleanIntegerFalse;

		static::assertEquals( $expectedBooleanIntegerFalseValue, $resultedBooleanIntegerFalseValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$booleanIntegerTrue} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param int $expectedBooleanIntegerTrueValue The expected `booleanIntegerTrue` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedBooleanIntegerTrueValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsBooleanIntegerTrueValueCorrectly( ValidValuesInterface $validValues, int $expectedBooleanIntegerTrueValue ): void
	{
		$resultedBooleanIntegerTrueValue = $validValues->booleanIntegerTrue;

		static::assertEquals( $expectedBooleanIntegerTrueValue, $resultedBooleanIntegerTrueValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$booleanIntegerSet} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param array $expectedBooleanIntegerSetValue The expected `booleanIntegerSet` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedBooleanIntegerSetValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsBooleanIntegerSetValueCorrectly( ValidValuesInterface $validValues, array $expectedBooleanIntegerSetValue ): void
	{
		$resultedBooleanIntegerSetValue = $validValues->booleanIntegerSet;

		static::assertEquals( $expectedBooleanIntegerSetValue, $resultedBooleanIntegerSetValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$booleanStringFalse} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param string $expectedBooleanStringFalseValue The expected `booleanStringFalse` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedBooleanStringFalseValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsBooleanStringFalseValueCorrectly( ValidValuesInterface $validValues, string $expectedBooleanStringFalseValue ): void
	{
		$resultedBooleanStringFalseValue = $validValues->booleanStringFalse;

		static::assertEquals( $expectedBooleanStringFalseValue, $resultedBooleanStringFalseValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$booleanStringTrue} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param string $expectedBooleanStringTrueValue The expected `booleanStringTrue` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedBooleanStringTrueValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsBooleanStringTrueValueCorrectly( ValidValuesInterface $validValues, string $expectedBooleanStringTrueValue ): void
	{
		$resultedBooleanStringTrueValue = $validValues->booleanStringTrue;

		static::assertEquals( $expectedBooleanStringTrueValue, $resultedBooleanStringTrueValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$booleanStringSet} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param array $expectedBooleanStringSetValue The expected `booleanStringSet` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedBooleanStringSetValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsBooleanStringSetValueCorrectly( ValidValuesInterface $validValues, array $expectedBooleanStringSetValue ): void
	{
		$resultedBooleanStringSetValue = $validValues->booleanStringSet;

		static::assertEquals( $expectedBooleanStringSetValue, $resultedBooleanStringSetValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$booleanIntegerStringFalse} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param string $expectedBooleanIntegerStringFalseValue The expected `booleanIntegerStringFalse` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedBooleanIntegerStringFalseValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsBooleanIntegerStringFalseValueCorrectly( ValidValuesInterface $validValues, string $expectedBooleanIntegerStringFalseValue ): void
	{
		$resultedBooleanIntegerStringFalseValue = $validValues->booleanIntegerStringFalse;

		static::assertEquals( $expectedBooleanIntegerStringFalseValue, $resultedBooleanIntegerStringFalseValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$booleanIntegerStringTrue} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param string $expectedBooleanIntegerStringTrueValue The expected `booleanIntegerStringTrue` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedBooleanIntegerStringTrueValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsBooleanIntegerStringTrueValueCorrectly( ValidValuesInterface $validValues, string $expectedBooleanIntegerStringTrueValue ): void
	{
		$resultedBooleanIntegerStringTrueValue = $validValues->booleanIntegerStringTrue;

		static::assertEquals( $expectedBooleanIntegerStringTrueValue, $resultedBooleanIntegerStringTrueValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$booleanIntegerStringSet} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param array $expectedBooleanIntegerStringSetValue The expected `booleanIntegerStringSet` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedBooleanIntegerStringSetValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsBooleanIntegerStringSetValueCorrectly( ValidValuesInterface $validValues, array $expectedBooleanIntegerStringSetValue ): void
	{
		$resultedBooleanIntegerStringSetValue = $validValues->booleanIntegerStringSet;

		static::assertEquals( $expectedBooleanIntegerStringSetValue, $resultedBooleanIntegerStringSetValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$regExBinaryString} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param string $expectedRegExBinaryStringValue The expected `regExBinaryString` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedRegExBinaryStringValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsRegExBinaryStringValueCorrectly( ValidValuesInterface $validValues, string $expectedRegExBinaryStringValue ): void
	{
		$resultedRegExBinaryStringValue = $validValues->regExBinaryString;

		static::assertEquals( $expectedRegExBinaryStringValue, $resultedRegExBinaryStringValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$regExIntegerString} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param string $expectedRegExIntegerStringValue The expected `regExIntegerString` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedRegExIntegerStringValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsRegExIntegerStringValueCorrectly( ValidValuesInterface $validValues, string $expectedRegExIntegerStringValue ): void
	{
		$resultedRegExIntegerStringValue = $validValues->regExIntegerString;

		static::assertEquals( $expectedRegExIntegerStringValue, $resultedRegExIntegerStringValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$regExFloatString} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param string $expectedRegExFloatStringValue The expected `regExFloatString` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedRegExFloatStringValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsRegExFloatStringValueCorrectly( ValidValuesInterface $validValues, string $expectedRegExFloatStringValue ): void
	{
		$resultedRegExFloatStringValue = $validValues->regExFloatString;

		static::assertEquals( $expectedRegExFloatStringValue, $resultedRegExFloatStringValue );
	}
}
