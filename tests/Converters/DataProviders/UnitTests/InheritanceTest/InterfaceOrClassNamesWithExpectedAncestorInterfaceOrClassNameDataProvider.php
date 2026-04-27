<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\InheritanceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\AbstractBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\AbstractDateTimeRelatedBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BiDirectionalDateTimeRelatedConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BinaryStringToBooleanArrayBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BinaryStringToBooleanArrayBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BinaryStringToIntegerBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BinaryStringToIntegerBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanArrayToBinaryStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanArrayToBinaryStringBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanIntegerStringToBooleanBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanIntegerStringToBooleanBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanIntegerToBooleanBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanIntegerToBooleanBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanStringToBooleanBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanStringToBooleanBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanToBooleanIntegerBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanToBooleanIntegerBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanToBooleanIntegerStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanToBooleanIntegerStringBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanToBooleanStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanToBooleanStringBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeImmutableToDateTimeStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeImmutableToDateTimeStringBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeStringToDateTimeBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeStringToDateTimeBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeStringToDateTimeImmutableBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeStringToDateTimeImmutableBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeToDateTimeStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\DateTimeToDateTimeStringBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\FloatStringToFloatBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\FloatStringToFloatBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\FloatToFloatStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\FloatToFloatStringBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\IntegerStringToIntegerBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\IntegerStringToIntegerBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\IntegerToBinaryStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\IntegerToBinaryStringBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\IntegerToIntegerStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\IntegerToIntegerStringBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBinaryStringToNullableBooleanArrayBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBinaryStringToNullableIntegerBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBinaryStringToNullableIntegerBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanArrayToNullableBinaryStringBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanIntegerToNullableBooleanBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanIntegerToNullableBooleanBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanStringToNullableBooleanBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanStringToNullableBooleanBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanToNullableBooleanIntegerBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanToNullableBooleanIntegerBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanToNullableBooleanStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanToNullableBooleanStringBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeStringToNullableDateTimeBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeStringToNullableDateTimeBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeToNullableDateTimeStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableDateTimeToNullableDateTimeStringBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableFloatStringToNullableFloatBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableFloatStringToNullableFloatBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableFloatToNullableFloatStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableFloatToNullableFloatStringBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableIntegerStringToNullableIntegerBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableIntegerStringToNullableIntegerBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableIntegerToNullableBinaryStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableIntegerToNullableBinaryStringBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableIntegerToNullableIntegerStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableIntegerToNullableIntegerStringBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullStringToNullBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullStringToNullBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullToNullStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullToNullStringBiDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\ConverterInterface;
use CodeKandis\ToolKit\Converters\DateTimeRelatedConverterInterface;
use CodeKandis\ToolKit\Converters\ExpectedTypes;
use CodeKandis\ToolKit\Converters\ExpectedTypesInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BinaryStringToBooleanArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BinaryStringToBooleanArrayUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BinaryStringToIntegerUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BinaryStringToIntegerUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanArrayToBinaryStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanArrayToBinaryStringUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanIntegerStringToBooleanUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanIntegerStringToBooleanUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanIntegerToBooleanUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanIntegerToBooleanUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanStringToBooleanUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanStringToBooleanUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanToBooleanIntegerStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanToBooleanIntegerStringUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanToBooleanIntegerUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanToBooleanIntegerUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanToBooleanStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanToBooleanStringUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\ClassConstantsToArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\ClassConstantsToArrayUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\DateTimeImmutableToDateTimeStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\DateTimeImmutableToDateTimeStringUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\DateTimeStringToDateTimeImmutableUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\DateTimeStringToDateTimeImmutableUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\DateTimeStringToDateTimeUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\DateTimeStringToDateTimeUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\DateTimeToDateTimeStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\DateTimeToDateTimeStringUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\EnumValuesToKeysArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\EnumValuesToKeysArrayUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\FloatStringToFloatUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\FloatStringToFloatUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\FloatToFloatStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\FloatToFloatStringUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\IntegerStringToIntegerUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\IntegerStringToIntegerUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\IntegerToBinaryStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\IntegerToBinaryStringUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\IntegerToIntegerStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\IntegerToIntegerStringUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\InterfaceConstantsToArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\InterfaceConstantsToArrayUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\InterfaceOrClassConstantsToArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\InterfaceOrClassConstantsToArrayUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBinaryStringToNullableBooleanArrayUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBinaryStringToNullableIntegerUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBinaryStringToNullableIntegerUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanArrayToNullableBinaryStringUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanIntegerToNullableBooleanUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanIntegerToNullableBooleanUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanStringToNullableBooleanUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanStringToNullableBooleanUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanToNullableBooleanIntegerUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanToNullableBooleanIntegerUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanToNullableBooleanStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanToNullableBooleanStringUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableClassConstantsToNullableArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableClassConstantsToNullableArrayUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeToNullableDateTimeStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableDateTimeToNullableDateTimeStringUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableEnumValuesToNullableKeysArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableEnumValuesToNullableKeysArrayUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableFloatStringToNullableFloatUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableFloatStringToNullableFloatUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableFloatToNullableFloatStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableFloatToNullableFloatStringUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableIntegerStringToNullableIntegerUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableIntegerStringToNullableIntegerUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableIntegerToNullableBinaryStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableIntegerToNullableBinaryStringUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableIntegerToNullableIntegerStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableIntegerToNullableIntegerStringUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableInterfaceConstantsToNullableArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableInterfaceConstantsToNullableArrayUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableNullStringToNullUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableNullStringToNullUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullStringToNullUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullStringToNullUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullToNullStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullToNullStringUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\UniDirectionalConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\UniDirectionalDateTimeRelatedConverterInterface;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\ToolKit\Converters\ValidValuesInterface;
use CodeKandis\Types\BaseObject;
use Override;

/**
 * Represents a data provider providing interface or class names with expected ancestor interface or class name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceOrClassNamesWithExpectedAncestorInterfaceOrClassNameDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'interfaceOrClassName'                 => AbstractBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			1   => [
				'interfaceOrClassName'                 => AbstractBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			2   => [
				'interfaceOrClassName'                 => AbstractConverter::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			3   => [
				'interfaceOrClassName'                 => AbstractConverter::class,
				'expectedAncestorInterfaceOrClassName' => ConverterInterface::class
			],
			4   => [
				'interfaceOrClassName'                 => AbstractDateTimeRelatedBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeRelatedConverter::class
			],
			5   => [
				'interfaceOrClassName'                 => AbstractDateTimeRelatedBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			6   => [
				'interfaceOrClassName'                 => AbstractDateTimeRelatedBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => DateTimeRelatedConverterInterface::class
			],
			7   => [
				'interfaceOrClassName'                 => AbstractDateTimeRelatedConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			8   => [
				'interfaceOrClassName'                 => AbstractDateTimeRelatedConverter::class,
				'expectedAncestorInterfaceOrClassName' => DateTimeRelatedConverterInterface::class
			],
			9   => [
				'interfaceOrClassName'                 => BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			10  => [
				'interfaceOrClassName'                 => BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverterInterface::class
			],
			11  => [
				'interfaceOrClassName'                 => BackedEnumValuesToKeyValuePairsArrayUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			12  => [
				'interfaceOrClassName'                 => BiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => ConverterInterface::class
			],
			13  => [
				'interfaceOrClassName'                 => BiDirectionalDateTimeRelatedConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			14  => [
				'interfaceOrClassName'                 => BiDirectionalDateTimeRelatedConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => DateTimeRelatedConverterInterface::class
			],
			15  => [
				'interfaceOrClassName'                 => BinaryStringToBooleanArrayBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			16  => [
				'interfaceOrClassName'                 => BinaryStringToBooleanArrayBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BinaryStringToBooleanArrayBiDirectionalConverterInterface::class
			],
			17  => [
				'interfaceOrClassName'                 => BinaryStringToBooleanArrayBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			18  => [
				'interfaceOrClassName'                 => BinaryStringToBooleanArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			19  => [
				'interfaceOrClassName'                 => BinaryStringToBooleanArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BinaryStringToBooleanArrayUniDirectionalConverterInterface::class
			],
			20  => [
				'interfaceOrClassName'                 => BinaryStringToBooleanArrayUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			21  => [
				'interfaceOrClassName'                 => BinaryStringToIntegerBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			22  => [
				'interfaceOrClassName'                 => BinaryStringToIntegerBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BinaryStringToIntegerBiDirectionalConverterInterface::class
			],
			23  => [
				'interfaceOrClassName'                 => BinaryStringToIntegerBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			24  => [
				'interfaceOrClassName'                 => BinaryStringToIntegerUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			25  => [
				'interfaceOrClassName'                 => BinaryStringToIntegerUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BinaryStringToIntegerUniDirectionalConverterInterface::class
			],
			26  => [
				'interfaceOrClassName'                 => BinaryStringToIntegerUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			27  => [
				'interfaceOrClassName'                 => BooleanArrayToBinaryStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			28  => [
				'interfaceOrClassName'                 => BooleanArrayToBinaryStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BooleanArrayToBinaryStringBiDirectionalConverterInterface::class
			],
			29  => [
				'interfaceOrClassName'                 => BooleanArrayToBinaryStringBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			30  => [
				'interfaceOrClassName'                 => BooleanArrayToBinaryStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			31  => [
				'interfaceOrClassName'                 => BooleanArrayToBinaryStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BooleanArrayToBinaryStringUniDirectionalConverterInterface::class
			],
			32  => [
				'interfaceOrClassName'                 => BooleanArrayToBinaryStringUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			33  => [
				'interfaceOrClassName'                 => BooleanIntegerStringToBooleanBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			34  => [
				'interfaceOrClassName'                 => BooleanIntegerStringToBooleanBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BooleanIntegerStringToBooleanBiDirectionalConverterInterface::class
			],
			35  => [
				'interfaceOrClassName'                 => BooleanIntegerStringToBooleanBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			36  => [
				'interfaceOrClassName'                 => BooleanIntegerStringToBooleanUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			37  => [
				'interfaceOrClassName'                 => BooleanIntegerStringToBooleanUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BooleanIntegerStringToBooleanUniDirectionalConverterInterface::class
			],
			38  => [
				'interfaceOrClassName'                 => BooleanIntegerStringToBooleanUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			39  => [
				'interfaceOrClassName'                 => BooleanIntegerToBooleanBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			40  => [
				'interfaceOrClassName'                 => BooleanIntegerToBooleanBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BooleanIntegerToBooleanBiDirectionalConverterInterface::class
			],
			41  => [
				'interfaceOrClassName'                 => BooleanIntegerToBooleanBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			42  => [
				'interfaceOrClassName'                 => BooleanIntegerToBooleanUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			43  => [
				'interfaceOrClassName'                 => BooleanIntegerToBooleanUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BooleanIntegerToBooleanUniDirectionalConverterInterface::class
			],
			44  => [
				'interfaceOrClassName'                 => BooleanIntegerToBooleanUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			45  => [
				'interfaceOrClassName'                 => BooleanStringToBooleanBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			46  => [
				'interfaceOrClassName'                 => BooleanStringToBooleanBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BooleanStringToBooleanBiDirectionalConverterInterface::class
			],
			47  => [
				'interfaceOrClassName'                 => BooleanStringToBooleanBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			48  => [
				'interfaceOrClassName'                 => BooleanStringToBooleanUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			49  => [
				'interfaceOrClassName'                 => BooleanStringToBooleanUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BooleanStringToBooleanUniDirectionalConverterInterface::class
			],
			50  => [
				'interfaceOrClassName'                 => BooleanStringToBooleanUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			51  => [
				'interfaceOrClassName'                 => BooleanToBooleanIntegerBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			52  => [
				'interfaceOrClassName'                 => BooleanToBooleanIntegerBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BooleanToBooleanIntegerBiDirectionalConverterInterface::class
			],
			53  => [
				'interfaceOrClassName'                 => BooleanToBooleanIntegerBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			54  => [
				'interfaceOrClassName'                 => BooleanToBooleanIntegerStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			55  => [
				'interfaceOrClassName'                 => BooleanToBooleanIntegerStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BooleanToBooleanIntegerStringBiDirectionalConverterInterface::class
			],
			56  => [
				'interfaceOrClassName'                 => BooleanToBooleanIntegerStringBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			57  => [
				'interfaceOrClassName'                 => BooleanToBooleanIntegerStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			58  => [
				'interfaceOrClassName'                 => BooleanToBooleanIntegerStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BooleanToBooleanIntegerStringUniDirectionalConverterInterface::class
			],
			59  => [
				'interfaceOrClassName'                 => BooleanToBooleanIntegerStringUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			60  => [
				'interfaceOrClassName'                 => BooleanToBooleanIntegerUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			61  => [
				'interfaceOrClassName'                 => BooleanToBooleanIntegerUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BooleanToBooleanIntegerUniDirectionalConverterInterface::class
			],
			62  => [
				'interfaceOrClassName'                 => BooleanToBooleanIntegerUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			63  => [
				'interfaceOrClassName'                 => BooleanToBooleanStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			64  => [
				'interfaceOrClassName'                 => BooleanToBooleanStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BooleanToBooleanStringBiDirectionalConverterInterface::class
			],
			65  => [
				'interfaceOrClassName'                 => BooleanToBooleanStringBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			66  => [
				'interfaceOrClassName'                 => BooleanToBooleanStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			67  => [
				'interfaceOrClassName'                 => BooleanToBooleanStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => BooleanToBooleanStringUniDirectionalConverterInterface::class
			],
			68  => [
				'interfaceOrClassName'                 => BooleanToBooleanStringUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			69  => [
				'interfaceOrClassName'                 => ClassConstantsToArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			70  => [
				'interfaceOrClassName'                 => ClassConstantsToArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => ClassConstantsToArrayUniDirectionalConverterInterface::class
			],
			71  => [
				'interfaceOrClassName'                 => ClassConstantsToArrayUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			72  => [
				'interfaceOrClassName'                 => DateTimeImmutableToDateTimeStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeRelatedBiDirectionalConverter::class
			],
			73  => [
				'interfaceOrClassName'                 => DateTimeImmutableToDateTimeStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => DateTimeImmutableToDateTimeStringBiDirectionalConverterInterface::class
			],
			74  => [
				'interfaceOrClassName'                 => DateTimeImmutableToDateTimeStringBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalDateTimeRelatedConverterInterface::class
			],
			75  => [
				'interfaceOrClassName'                 => DateTimeImmutableToDateTimeStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeRelatedConverter::class
			],
			76  => [
				'interfaceOrClassName'                 => DateTimeImmutableToDateTimeStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => DateTimeImmutableToDateTimeStringUniDirectionalConverterInterface::class
			],
			77  => [
				'interfaceOrClassName'                 => DateTimeImmutableToDateTimeStringUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalDateTimeRelatedConverterInterface::class
			],
			78  => [
				'interfaceOrClassName'                 => DateTimeRelatedConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => ConverterInterface::class
			],
			79  => [
				'interfaceOrClassName'                 => DateTimeStringToDateTimeBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeRelatedBiDirectionalConverter::class
			],
			80  => [
				'interfaceOrClassName'                 => DateTimeStringToDateTimeBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => DateTimeStringToDateTimeBiDirectionalConverterInterface::class
			],
			81  => [
				'interfaceOrClassName'                 => DateTimeStringToDateTimeBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalDateTimeRelatedConverterInterface::class
			],
			82  => [
				'interfaceOrClassName'                 => DateTimeStringToDateTimeImmutableBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeRelatedBiDirectionalConverter::class
			],
			83  => [
				'interfaceOrClassName'                 => DateTimeStringToDateTimeImmutableBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => DateTimeStringToDateTimeImmutableBiDirectionalConverterInterface::class
			],
			84  => [
				'interfaceOrClassName'                 => DateTimeStringToDateTimeImmutableBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalDateTimeRelatedConverterInterface::class
			],
			85  => [
				'interfaceOrClassName'                 => DateTimeStringToDateTimeImmutableUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeRelatedConverter::class
			],
			86  => [
				'interfaceOrClassName'                 => DateTimeStringToDateTimeImmutableUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => DateTimeStringToDateTimeImmutableUniDirectionalConverterInterface::class
			],
			87  => [
				'interfaceOrClassName'                 => DateTimeStringToDateTimeImmutableUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalDateTimeRelatedConverterInterface::class
			],
			88  => [
				'interfaceOrClassName'                 => DateTimeStringToDateTimeUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeRelatedConverter::class
			],
			89  => [
				'interfaceOrClassName'                 => DateTimeStringToDateTimeUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => DateTimeStringToDateTimeUniDirectionalConverterInterface::class
			],
			90  => [
				'interfaceOrClassName'                 => DateTimeStringToDateTimeUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalDateTimeRelatedConverterInterface::class
			],
			91  => [
				'interfaceOrClassName'                 => DateTimeToDateTimeStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeRelatedBiDirectionalConverter::class
			],
			92  => [
				'interfaceOrClassName'                 => DateTimeToDateTimeStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => DateTimeToDateTimeStringBiDirectionalConverterInterface::class
			],
			93  => [
				'interfaceOrClassName'                 => DateTimeToDateTimeStringBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalDateTimeRelatedConverterInterface::class
			],
			94  => [
				'interfaceOrClassName'                 => DateTimeToDateTimeStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeRelatedConverter::class
			],
			95  => [
				'interfaceOrClassName'                 => DateTimeToDateTimeStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => DateTimeToDateTimeStringUniDirectionalConverterInterface::class
			],
			96  => [
				'interfaceOrClassName'                 => DateTimeToDateTimeStringUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalDateTimeRelatedConverterInterface::class
			],
			97  => [
				'interfaceOrClassName'                 => EnumValuesToKeysArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			98  => [
				'interfaceOrClassName'                 => EnumValuesToKeysArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => EnumValuesToKeysArrayUniDirectionalConverterInterface::class
			],
			99  => [
				'interfaceOrClassName'                 => EnumValuesToKeysArrayUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			100 => [
				'interfaceOrClassName'                 => ExpectedTypes::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			101 => [
				'interfaceOrClassName'                 => ExpectedTypes::class,
				'expectedAncestorInterfaceOrClassName' => ExpectedTypesInterface::class
			],
			102 => [
				'interfaceOrClassName'                 => FloatStringToFloatBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			103 => [
				'interfaceOrClassName'                 => FloatStringToFloatBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => FloatStringToFloatBiDirectionalConverterInterface::class
			],
			104 => [
				'interfaceOrClassName'                 => FloatStringToFloatBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			105 => [
				'interfaceOrClassName'                 => FloatStringToFloatUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			106 => [
				'interfaceOrClassName'                 => FloatStringToFloatUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => FloatStringToFloatUniDirectionalConverterInterface::class
			],
			107 => [
				'interfaceOrClassName'                 => FloatStringToFloatUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			108 => [
				'interfaceOrClassName'                 => FloatToFloatStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			109 => [
				'interfaceOrClassName'                 => FloatToFloatStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => FloatToFloatStringBiDirectionalConverterInterface::class
			],
			110 => [
				'interfaceOrClassName'                 => FloatToFloatStringBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			111 => [
				'interfaceOrClassName'                 => FloatToFloatStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			112 => [
				'interfaceOrClassName'                 => FloatToFloatStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => FloatToFloatStringUniDirectionalConverterInterface::class
			],
			113 => [
				'interfaceOrClassName'                 => FloatToFloatStringUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			114 => [
				'interfaceOrClassName'                 => IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			115 => [
				'interfaceOrClassName'                 => IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverterInterface::class
			],
			116 => [
				'interfaceOrClassName'                 => IntegerBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			117 => [
				'interfaceOrClassName'                 => IntegerStringToIntegerBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			118 => [
				'interfaceOrClassName'                 => IntegerStringToIntegerBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => IntegerStringToIntegerBiDirectionalConverterInterface::class
			],
			119 => [
				'interfaceOrClassName'                 => IntegerStringToIntegerBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			120 => [
				'interfaceOrClassName'                 => IntegerStringToIntegerUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			121 => [
				'interfaceOrClassName'                 => IntegerStringToIntegerUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => IntegerStringToIntegerUniDirectionalConverterInterface::class
			],
			122 => [
				'interfaceOrClassName'                 => IntegerStringToIntegerUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			123 => [
				'interfaceOrClassName'                 => IntegerToBinaryStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			124 => [
				'interfaceOrClassName'                 => IntegerToBinaryStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => IntegerToBinaryStringBiDirectionalConverterInterface::class
			],
			125 => [
				'interfaceOrClassName'                 => IntegerToBinaryStringBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			126 => [
				'interfaceOrClassName'                 => IntegerToBinaryStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			127 => [
				'interfaceOrClassName'                 => IntegerToBinaryStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => IntegerToBinaryStringUniDirectionalConverterInterface::class
			],
			128 => [
				'interfaceOrClassName'                 => IntegerToBinaryStringUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			129 => [
				'interfaceOrClassName'                 => IntegerToIntegerStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			130 => [
				'interfaceOrClassName'                 => IntegerToIntegerStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => IntegerToIntegerStringBiDirectionalConverterInterface::class
			],
			131 => [
				'interfaceOrClassName'                 => IntegerToIntegerStringBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			132 => [
				'interfaceOrClassName'                 => IntegerToIntegerStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			133 => [
				'interfaceOrClassName'                 => IntegerToIntegerStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => IntegerToIntegerStringUniDirectionalConverterInterface::class
			],
			134 => [
				'interfaceOrClassName'                 => IntegerToIntegerStringUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			135 => [
				'interfaceOrClassName'                 => InterfaceConstantsToArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			136 => [
				'interfaceOrClassName'                 => InterfaceConstantsToArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceConstantsToArrayUniDirectionalConverterInterface::class
			],
			137 => [
				'interfaceOrClassName'                 => InterfaceConstantsToArrayUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			138 => [
				'interfaceOrClassName'                 => InterfaceOrClassConstantsToArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			139 => [
				'interfaceOrClassName'                 => InterfaceOrClassConstantsToArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassConstantsToArrayUniDirectionalConverterInterface::class
			],
			140 => [
				'interfaceOrClassName'                 => InterfaceOrClassConstantsToArrayUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			141 => [
				'interfaceOrClassName'                 => NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			142 => [
				'interfaceOrClassName'                 => NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverterInterface::class
			],
			143 => [
				'interfaceOrClassName'                 => NullableBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			144 => [
				'interfaceOrClassName'                 => NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			145 => [
				'interfaceOrClassName'                 => NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableBinaryStringToNullableBooleanArrayBiDirectionalConverterInterface::class
			],
			146 => [
				'interfaceOrClassName'                 => NullableBinaryStringToNullableBooleanArrayBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			147 => [
				'interfaceOrClassName'                 => NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			148 => [
				'interfaceOrClassName'                 => NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableBinaryStringToNullableBooleanArrayUniDirectionalConverterInterface::class
			],
			149 => [
				'interfaceOrClassName'                 => NullableBinaryStringToNullableBooleanArrayUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			150 => [
				'interfaceOrClassName'                 => NullableBinaryStringToNullableIntegerBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			151 => [
				'interfaceOrClassName'                 => NullableBinaryStringToNullableIntegerBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableBinaryStringToNullableIntegerBiDirectionalConverterInterface::class
			],
			152 => [
				'interfaceOrClassName'                 => NullableBinaryStringToNullableIntegerBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			153 => [
				'interfaceOrClassName'                 => NullableBinaryStringToNullableIntegerUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			154 => [
				'interfaceOrClassName'                 => NullableBinaryStringToNullableIntegerUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableBinaryStringToNullableIntegerUniDirectionalConverterInterface::class
			],
			155 => [
				'interfaceOrClassName'                 => NullableBinaryStringToNullableIntegerUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			156 => [
				'interfaceOrClassName'                 => NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			157 => [
				'interfaceOrClassName'                 => NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableBooleanArrayToNullableBinaryStringBiDirectionalConverterInterface::class
			],
			158 => [
				'interfaceOrClassName'                 => NullableBooleanArrayToNullableBinaryStringBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			159 => [
				'interfaceOrClassName'                 => NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			160 => [
				'interfaceOrClassName'                 => NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableBooleanArrayToNullableBinaryStringUniDirectionalConverterInterface::class
			],
			161 => [
				'interfaceOrClassName'                 => NullableBooleanArrayToNullableBinaryStringUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			162 => [
				'interfaceOrClassName'                 => NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			163 => [
				'interfaceOrClassName'                 => NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverterInterface::class
			],
			164 => [
				'interfaceOrClassName'                 => NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			165 => [
				'interfaceOrClassName'                 => NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			166 => [
				'interfaceOrClassName'                 => NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverterInterface::class
			],
			167 => [
				'interfaceOrClassName'                 => NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			168 => [
				'interfaceOrClassName'                 => NullableBooleanIntegerToNullableBooleanBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			169 => [
				'interfaceOrClassName'                 => NullableBooleanIntegerToNullableBooleanBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableBooleanIntegerToNullableBooleanBiDirectionalConverterInterface::class
			],
			170 => [
				'interfaceOrClassName'                 => NullableBooleanIntegerToNullableBooleanBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			171 => [
				'interfaceOrClassName'                 => NullableBooleanIntegerToNullableBooleanUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			172 => [
				'interfaceOrClassName'                 => NullableBooleanIntegerToNullableBooleanUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableBooleanIntegerToNullableBooleanUniDirectionalConverterInterface::class
			],
			173 => [
				'interfaceOrClassName'                 => NullableBooleanIntegerToNullableBooleanUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			174 => [
				'interfaceOrClassName'                 => NullableBooleanStringToNullableBooleanBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			175 => [
				'interfaceOrClassName'                 => NullableBooleanStringToNullableBooleanBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableBooleanStringToNullableBooleanBiDirectionalConverterInterface::class
			],
			176 => [
				'interfaceOrClassName'                 => NullableBooleanStringToNullableBooleanBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			177 => [
				'interfaceOrClassName'                 => NullableBooleanStringToNullableBooleanUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			178 => [
				'interfaceOrClassName'                 => NullableBooleanStringToNullableBooleanUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableBooleanStringToNullableBooleanUniDirectionalConverterInterface::class
			],
			179 => [
				'interfaceOrClassName'                 => NullableBooleanStringToNullableBooleanUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			180 => [
				'interfaceOrClassName'                 => NullableBooleanToNullableBooleanIntegerBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			181 => [
				'interfaceOrClassName'                 => NullableBooleanToNullableBooleanIntegerBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableBooleanToNullableBooleanIntegerBiDirectionalConverterInterface::class
			],
			182 => [
				'interfaceOrClassName'                 => NullableBooleanToNullableBooleanIntegerBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			183 => [
				'interfaceOrClassName'                 => NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			184 => [
				'interfaceOrClassName'                 => NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverterInterface::class
			],
			185 => [
				'interfaceOrClassName'                 => NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			186 => [
				'interfaceOrClassName'                 => NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			187 => [
				'interfaceOrClassName'                 => NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverterInterface::class
			],
			188 => [
				'interfaceOrClassName'                 => NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			189 => [
				'interfaceOrClassName'                 => NullableBooleanToNullableBooleanIntegerUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			190 => [
				'interfaceOrClassName'                 => NullableBooleanToNullableBooleanIntegerUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableBooleanToNullableBooleanIntegerUniDirectionalConverterInterface::class
			],
			191 => [
				'interfaceOrClassName'                 => NullableBooleanToNullableBooleanIntegerUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			192 => [
				'interfaceOrClassName'                 => NullableBooleanToNullableBooleanStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			193 => [
				'interfaceOrClassName'                 => NullableBooleanToNullableBooleanStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableBooleanToNullableBooleanStringBiDirectionalConverterInterface::class
			],
			194 => [
				'interfaceOrClassName'                 => NullableBooleanToNullableBooleanStringBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			195 => [
				'interfaceOrClassName'                 => NullableBooleanToNullableBooleanStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			196 => [
				'interfaceOrClassName'                 => NullableBooleanToNullableBooleanStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableBooleanToNullableBooleanStringUniDirectionalConverterInterface::class
			],
			197 => [
				'interfaceOrClassName'                 => NullableBooleanToNullableBooleanStringUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			198 => [
				'interfaceOrClassName'                 => NullableClassConstantsToNullableArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			199 => [
				'interfaceOrClassName'                 => NullableClassConstantsToNullableArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableClassConstantsToNullableArrayUniDirectionalConverterInterface::class
			],
			200 => [
				'interfaceOrClassName'                 => NullableClassConstantsToNullableArrayUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			201 => [
				'interfaceOrClassName'                 => NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeRelatedBiDirectionalConverter::class
			],
			202 => [
				'interfaceOrClassName'                 => NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverterInterface::class
			],
			203 => [
				'interfaceOrClassName'                 => NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalDateTimeRelatedConverterInterface::class
			],
			204 => [
				'interfaceOrClassName'                 => NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeRelatedConverter::class
			],
			205 => [
				'interfaceOrClassName'                 => NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverterInterface::class
			],
			206 => [
				'interfaceOrClassName'                 => NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalDateTimeRelatedConverterInterface::class
			],
			207 => [
				'interfaceOrClassName'                 => NullableDateTimeStringToNullableDateTimeBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeRelatedBiDirectionalConverter::class
			],
			208 => [
				'interfaceOrClassName'                 => NullableDateTimeStringToNullableDateTimeBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableDateTimeStringToNullableDateTimeBiDirectionalConverterInterface::class
			],
			209 => [
				'interfaceOrClassName'                 => NullableDateTimeStringToNullableDateTimeBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalDateTimeRelatedConverterInterface::class
			],
			210 => [
				'interfaceOrClassName'                 => NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeRelatedBiDirectionalConverter::class
			],
			211 => [
				'interfaceOrClassName'                 => NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverterInterface::class
			],
			212 => [
				'interfaceOrClassName'                 => NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalDateTimeRelatedConverterInterface::class
			],
			213 => [
				'interfaceOrClassName'                 => NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeRelatedConverter::class
			],
			214 => [
				'interfaceOrClassName'                 => NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverterInterface::class
			],
			215 => [
				'interfaceOrClassName'                 => NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalDateTimeRelatedConverterInterface::class
			],
			216 => [
				'interfaceOrClassName'                 => NullableDateTimeStringToNullableDateTimeUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeRelatedConverter::class
			],
			217 => [
				'interfaceOrClassName'                 => NullableDateTimeStringToNullableDateTimeUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableDateTimeStringToNullableDateTimeUniDirectionalConverterInterface::class
			],
			218 => [
				'interfaceOrClassName'                 => NullableDateTimeStringToNullableDateTimeUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalDateTimeRelatedConverterInterface::class
			],
			219 => [
				'interfaceOrClassName'                 => NullableDateTimeToNullableDateTimeStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeRelatedBiDirectionalConverter::class
			],
			220 => [
				'interfaceOrClassName'                 => NullableDateTimeToNullableDateTimeStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableDateTimeToNullableDateTimeStringBiDirectionalConverterInterface::class
			],
			221 => [
				'interfaceOrClassName'                 => NullableDateTimeToNullableDateTimeStringBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalDateTimeRelatedConverterInterface::class
			],
			222 => [
				'interfaceOrClassName'                 => NullableDateTimeToNullableDateTimeStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractDateTimeRelatedConverter::class
			],
			223 => [
				'interfaceOrClassName'                 => NullableDateTimeToNullableDateTimeStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableDateTimeToNullableDateTimeStringUniDirectionalConverterInterface::class
			],
			224 => [
				'interfaceOrClassName'                 => NullableDateTimeToNullableDateTimeStringUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalDateTimeRelatedConverterInterface::class
			],
			225 => [
				'interfaceOrClassName'                 => NullableEnumValuesToNullableKeysArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			226 => [
				'interfaceOrClassName'                 => NullableEnumValuesToNullableKeysArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableEnumValuesToNullableKeysArrayUniDirectionalConverterInterface::class
			],
			227 => [
				'interfaceOrClassName'                 => NullableEnumValuesToNullableKeysArrayUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			228 => [
				'interfaceOrClassName'                 => NullableFloatStringToNullableFloatBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			229 => [
				'interfaceOrClassName'                 => NullableFloatStringToNullableFloatBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableFloatStringToNullableFloatBiDirectionalConverterInterface::class
			],
			230 => [
				'interfaceOrClassName'                 => NullableFloatStringToNullableFloatBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			231 => [
				'interfaceOrClassName'                 => NullableFloatStringToNullableFloatUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			232 => [
				'interfaceOrClassName'                 => NullableFloatStringToNullableFloatUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableFloatStringToNullableFloatUniDirectionalConverterInterface::class
			],
			233 => [
				'interfaceOrClassName'                 => NullableFloatStringToNullableFloatUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			234 => [
				'interfaceOrClassName'                 => NullableFloatToNullableFloatStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			235 => [
				'interfaceOrClassName'                 => NullableFloatToNullableFloatStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableFloatToNullableFloatStringBiDirectionalConverterInterface::class
			],
			236 => [
				'interfaceOrClassName'                 => NullableFloatToNullableFloatStringBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			237 => [
				'interfaceOrClassName'                 => NullableFloatToNullableFloatStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			238 => [
				'interfaceOrClassName'                 => NullableFloatToNullableFloatStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableFloatToNullableFloatStringUniDirectionalConverterInterface::class
			],
			239 => [
				'interfaceOrClassName'                 => NullableFloatToNullableFloatStringUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			240 => [
				'interfaceOrClassName'                 => NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			241 => [
				'interfaceOrClassName'                 => NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverterInterface::class
			],
			242 => [
				'interfaceOrClassName'                 => NullableIntegerBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			243 => [
				'interfaceOrClassName'                 => NullableIntegerStringToNullableIntegerBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			244 => [
				'interfaceOrClassName'                 => NullableIntegerStringToNullableIntegerBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableIntegerStringToNullableIntegerBiDirectionalConverterInterface::class
			],
			245 => [
				'interfaceOrClassName'                 => NullableIntegerStringToNullableIntegerBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			246 => [
				'interfaceOrClassName'                 => NullableIntegerStringToNullableIntegerUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			247 => [
				'interfaceOrClassName'                 => NullableIntegerStringToNullableIntegerUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableIntegerStringToNullableIntegerUniDirectionalConverterInterface::class
			],
			248 => [
				'interfaceOrClassName'                 => NullableIntegerStringToNullableIntegerUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			249 => [
				'interfaceOrClassName'                 => NullableIntegerToNullableBinaryStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			250 => [
				'interfaceOrClassName'                 => NullableIntegerToNullableBinaryStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableIntegerToNullableBinaryStringBiDirectionalConverterInterface::class
			],
			251 => [
				'interfaceOrClassName'                 => NullableIntegerToNullableBinaryStringBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			252 => [
				'interfaceOrClassName'                 => NullableIntegerToNullableBinaryStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			253 => [
				'interfaceOrClassName'                 => NullableIntegerToNullableBinaryStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableIntegerToNullableBinaryStringUniDirectionalConverterInterface::class
			],
			254 => [
				'interfaceOrClassName'                 => NullableIntegerToNullableBinaryStringUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			255 => [
				'interfaceOrClassName'                 => NullableIntegerToNullableIntegerStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			256 => [
				'interfaceOrClassName'                 => NullableIntegerToNullableIntegerStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableIntegerToNullableIntegerStringBiDirectionalConverterInterface::class
			],
			257 => [
				'interfaceOrClassName'                 => NullableIntegerToNullableIntegerStringBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			258 => [
				'interfaceOrClassName'                 => NullableIntegerToNullableIntegerStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			259 => [
				'interfaceOrClassName'                 => NullableIntegerToNullableIntegerStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableIntegerToNullableIntegerStringUniDirectionalConverterInterface::class
			],
			260 => [
				'interfaceOrClassName'                 => NullableIntegerToNullableIntegerStringUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			261 => [
				'interfaceOrClassName'                 => NullableInterfaceConstantsToNullableArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			262 => [
				'interfaceOrClassName'                 => NullableInterfaceConstantsToNullableArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableInterfaceConstantsToNullableArrayUniDirectionalConverterInterface::class
			],
			263 => [
				'interfaceOrClassName'                 => NullableInterfaceConstantsToNullableArrayUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			264 => [
				'interfaceOrClassName'                 => NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			265 => [
				'interfaceOrClassName'                 => NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverterInterface::class
			],
			266 => [
				'interfaceOrClassName'                 => NullableInterfaceOrClassConstantsToNullableArrayUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			267 => [
				'interfaceOrClassName'                 => NullableNullStringToNullUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			268 => [
				'interfaceOrClassName'                 => NullableNullStringToNullUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableNullStringToNullUniDirectionalConverterInterface::class
			],
			269 => [
				'interfaceOrClassName'                 => NullableNullStringToNullUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			270 => [
				'interfaceOrClassName'                 => NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			271 => [
				'interfaceOrClassName'                 => NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverterInterface::class
			],
			272 => [
				'interfaceOrClassName'                 => NullableStringBackedEnumValuesToNullableKeyValuePairsArrayUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			273 => [
				'interfaceOrClassName'                 => NullStringToNullBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			274 => [
				'interfaceOrClassName'                 => NullStringToNullBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullStringToNullBiDirectionalConverterInterface::class
			],
			275 => [
				'interfaceOrClassName'                 => NullStringToNullBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			276 => [
				'interfaceOrClassName'                 => NullStringToNullUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			277 => [
				'interfaceOrClassName'                 => NullStringToNullUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullStringToNullUniDirectionalConverterInterface::class
			],
			278 => [
				'interfaceOrClassName'                 => NullStringToNullUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			279 => [
				'interfaceOrClassName'                 => NullToNullStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractBiDirectionalConverter::class
			],
			280 => [
				'interfaceOrClassName'                 => NullToNullStringBiDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullToNullStringBiDirectionalConverterInterface::class
			],
			281 => [
				'interfaceOrClassName'                 => NullToNullStringBiDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => BiDirectionalConverterInterface::class
			],
			282 => [
				'interfaceOrClassName'                 => NullToNullStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			283 => [
				'interfaceOrClassName'                 => NullToNullStringUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => NullToNullStringUniDirectionalConverterInterface::class
			],
			284 => [
				'interfaceOrClassName'                 => NullToNullStringUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			285 => [
				'interfaceOrClassName'                 => StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => AbstractConverter::class
			],
			286 => [
				'interfaceOrClassName'                 => StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverter::class,
				'expectedAncestorInterfaceOrClassName' => StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverterInterface::class
			],
			287 => [
				'interfaceOrClassName'                 => StringBackedEnumValuesToKeyValuePairsArrayUniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			288 => [
				'interfaceOrClassName'                 => UniDirectionalConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => ConverterInterface::class
			],
			289 => [
				'interfaceOrClassName'                 => UniDirectionalDateTimeRelatedConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => DateTimeRelatedConverterInterface::class
			],
			290 => [
				'interfaceOrClassName'                 => UniDirectionalDateTimeRelatedConverterInterface::class,
				'expectedAncestorInterfaceOrClassName' => UniDirectionalConverterInterface::class
			],
			291 => [
				'interfaceOrClassName'                 => ValidValues::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			292 => [
				'interfaceOrClassName'                 => ValidValues::class,
				'expectedAncestorInterfaceOrClassName' => ValidValuesInterface::class
			]
		];
	}
}
