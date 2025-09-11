<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Converters\ValidValuesInterface;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedBackedEnumNameValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedBooleanFalseValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedBooleanIntegerFalseValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedBooleanIntegerSetValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedBooleanIntegerStringFalseValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedBooleanIntegerStringTrueValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedBooleanIntegerStringValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedBooleanIntegerTrueValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedBooleanStringFalseValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedBooleanStringTrueValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedBooleanTrueValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedClassNameValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedDateTimeStringTemplateValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedEnumNameValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedIntegerBackedEnumNameValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedInterfaceNameValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedInterfaceOrClassNameValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedNullStringValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedNullValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedRegExBinaryStringValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedRegExBooleanStringValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedRegExFloatStringValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedRegExIntegerStringValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithExpectedStringBackedEnumNameValueDataProvider;
use CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesWithFormatAndExpectedDateTimeStringDataProvider;
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
	 * Tests if {@link ValidValuesInterface::$booleanFalse} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param bool $expectedBooleanFalseValue The expected `booleanFalse` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedBooleanFalseValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsBooleanFalseValueCorrectly( ValidValuesInterface $validValues, bool $expectedBooleanFalseValue ): void
	{
		$resultedBooleanFalseValue = $validValues->booleanFalse;

		static::assertEquals( $expectedBooleanFalseValue, $resultedBooleanFalseValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$booleanTrue} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param bool $expectedBooleanTrueValue The expected `booleanTrue` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedBooleanTrueValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsBooleanTrueValueCorrectly( ValidValuesInterface $validValues, bool $expectedBooleanTrueValue ): void
	{
		$resultedBooleanTrueValue = $validValues->booleanTrue;

		static::assertEquals( $expectedBooleanTrueValue, $resultedBooleanTrueValue );
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
	 * Tests if {@link ValidValuesInterface::$regExBooleanString} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param string $expectedRegExBooleanStringValue The expected `regExBooleanString` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedRegExBooleanStringValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsRegExBooleanStringValueCorrectly( ValidValuesInterface $validValues, string $expectedRegExBooleanStringValue ): void
	{
		$resultedRegExBooleanStringValue = $validValues->regExBooleanString;

		static::assertEquals( $expectedRegExBooleanStringValue, $resultedRegExBooleanStringValue );
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
	 * Tests if {@link ValidValuesInterface::$regExBooleanIntegerString} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param string $expectedBooleanIntegerStringValue The expected `booleanIntegerString` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedBooleanIntegerStringValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsBooleanIntegerStringValueCorrectly( ValidValuesInterface $validValues, string $expectedBooleanIntegerStringValue ): void
	{
		$resultedBooleanIntegerStringValue = $validValues->regExBooleanIntegerString;

		static::assertEquals( $expectedBooleanIntegerStringValue, $resultedBooleanIntegerStringValue );
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
	 * Tests if {@link ValidValuesInterface::$enumName} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param string $expectedEnumNameValue The expected `enumName` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedEnumNameValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsEnumNameValueCorrectly( ValidValuesInterface $validValues, string $expectedEnumNameValue ): void
	{
		$resultedEnumNameValue = $validValues->enumName;

		static::assertEquals( $expectedEnumNameValue, $resultedEnumNameValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$backedEnumName} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param string $expectedBackedEnumNameValue The expected `backedEnumName` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedBackedEnumNameValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsBackedEnumNameValueCorrectly( ValidValuesInterface $validValues, string $expectedBackedEnumNameValue ): void
	{
		$resultedBackedEnumNameValue = $validValues->backedEnumName;

		static::assertEquals( $expectedBackedEnumNameValue, $resultedBackedEnumNameValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$integerBackedEnumName} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param string $expectedIntegerBackedEnumNameValue The expected `integerBackedEnumName` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedIntegerBackedEnumNameValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsIntegerBackedEnumNameValueCorrectly( ValidValuesInterface $validValues, string $expectedIntegerBackedEnumNameValue ): void
	{
		$resultedIntegerBackedEnumNameValue = $validValues->integerBackedEnumName;

		static::assertEquals( $expectedIntegerBackedEnumNameValue, $resultedIntegerBackedEnumNameValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$stringBackedEnumName} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param string $expectedStringBackedEnumNameValue The expected `stringBackedEnumName` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedStringBackedEnumNameValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsStringBackedEnumNameValueCorrectly( ValidValuesInterface $validValues, string $expectedStringBackedEnumNameValue ): void
	{
		$resultedStringBackedEnumNameValue = $validValues->stringBackedEnumName;

		static::assertEquals( $expectedStringBackedEnumNameValue, $resultedStringBackedEnumNameValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$interfaceName} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param string $expectedInterfaceNameValue The expected `interfaceName` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedInterfaceNameValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsInterfaceNameValueCorrectly( ValidValuesInterface $validValues, string $expectedInterfaceNameValue ): void
	{
		$resultedInterfaceNameValue = $validValues->interfaceName;

		static::assertEquals( $expectedInterfaceNameValue, $resultedInterfaceNameValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$className} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param string $expectedClassNameValue The expected `className` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedClassNameValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsClassNameValueCorrectly( ValidValuesInterface $validValues, string $expectedClassNameValue ): void
	{
		$resultedClassNameValue = $validValues->className;

		static::assertEquals( $expectedClassNameValue, $resultedClassNameValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$interfaceOrClassName} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param string $expectedInterfaceOrClassNameValue The expected `interfaceOrClassName` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedInterfaceOrClassNameValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsInterfaceOrClassNameValueCorrectly( ValidValuesInterface $validValues, string $expectedInterfaceOrClassNameValue ): void
	{
		$resultedInterfaceOrClassNameValue = $validValues->interfaceOrClassName;

		static::assertEquals( $expectedInterfaceOrClassNameValue, $resultedInterfaceOrClassNameValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::$dateTimeStringTemplate} returns the value correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param string $expectedDateTimeStringTemplateValue The expected `dateTimeStringTemplate` value.
	 */
	#[DataProviderExternal( ValidValuesWithExpectedDateTimeStringTemplateValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsDateTimeStringTemplateValueCorrectly( ValidValuesInterface $validValues, string $expectedDateTimeStringTemplateValue ): void
	{
		$resultedDateTimeStringTemplateValue = $validValues->dateTimeStringTemplate;

		static::assertEquals( $expectedDateTimeStringTemplateValue, $resultedDateTimeStringTemplateValue );
	}

	/**
	 * Tests if {@link ValidValuesInterface::createDateTimeString()} returns the `DateTime string` correctly.
	 * @param ValidValuesInterface $validValues The valid values to test.
	 * @param string $format The format to pass.
	 * @param string $expectedDateTimeString The expected `DateTime string`.
	 */
	#[DataProviderExternal( ValidValuesWithFormatAndExpectedDateTimeStringDataProvider::class, 'provideData' )]
	public function testIfMethodCreateTypedResourceReturnsTypedResourceCorrectly( ValidValuesInterface $validValues, string $format, string $expectedDateTimeString ): void
	{
		$resultedDateTimeString = $validValues->createDateTimeString( $format );

		static::assertEquals( $expectedDateTimeString, $resultedDateTimeString );
	}
}
