<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\DataProviders\UnitTests\BiDirectionalConverters\AbstractBiDirectionalConverterTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BinaryStringToBooleanArrayBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BinaryStringToIntegerBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanArrayToBinaryStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanIntegerStringToBooleanBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanIntegerToBooleanBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanStringToBooleanBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanToBooleanIntegerBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanToBooleanIntegerStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\BooleanToBooleanStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\FloatStringToFloatBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\FloatToFloatStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\IntegerStringToIntegerBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\IntegerToBinaryStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\IntegerToIntegerStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBinaryStringToNullableIntegerBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanIntegerToNullableBooleanBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanStringToNullableBooleanBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanToNullableBooleanIntegerBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableBooleanToNullableBooleanStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableFloatStringToNullableFloatBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableFloatToNullableFloatStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableIntegerStringToNullableIntegerBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableIntegerToNullableBinaryStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullableIntegerToNullableIntegerStringBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullStringToNullBiDirectionalConverter;
use CodeKandis\ToolKit\Converters\BiDirectionalConverters\NullToNullStringBiDirectionalConverter;
use Override;

/**
 * Represents a data provider providing bidirectional converter class names.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class BiDirectionalConverterClassNamesDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'biDirectionalConverterClassName' => BinaryStringToBooleanArrayBiDirectionalConverter::class
			],
			1  => [
				'biDirectionalConverterClassName' => BinaryStringToIntegerBiDirectionalConverter::class
			],
			2  => [
				'biDirectionalConverterClassName' => BooleanArrayToBinaryStringBiDirectionalConverter::class
			],
			3  => [
				'biDirectionalConverterClassName' => BooleanIntegerStringToBooleanBiDirectionalConverter::class
			],
			4  => [
				'biDirectionalConverterClassName' => BooleanIntegerToBooleanBiDirectionalConverter::class
			],
			5  => [
				'biDirectionalConverterClassName' => BooleanStringToBooleanBiDirectionalConverter::class
			],
			6  => [
				'biDirectionalConverterClassName' => BooleanToBooleanIntegerBiDirectionalConverter::class
			],
			7  => [
				'biDirectionalConverterClassName' => BooleanToBooleanIntegerStringBiDirectionalConverter::class
			],
			8  => [
				'biDirectionalConverterClassName' => BooleanToBooleanStringBiDirectionalConverter::class
			],
			9  => [
				'biDirectionalConverterClassName' => FloatStringToFloatBiDirectionalConverter::class
			],
			10 => [
				'biDirectionalConverterClassName' => FloatToFloatStringBiDirectionalConverter::class
			],
			11 => [
				'biDirectionalConverterClassName' => IntegerStringToIntegerBiDirectionalConverter::class
			],
			12 => [
				'biDirectionalConverterClassName' => IntegerToBinaryStringBiDirectionalConverter::class
			],
			13 => [
				'biDirectionalConverterClassName' => IntegerToIntegerStringBiDirectionalConverter::class
			],
			14 => [
				'biDirectionalConverterClassName' => NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter::class
			],
			15 => [
				'biDirectionalConverterClassName' => NullableBinaryStringToNullableIntegerBiDirectionalConverter::class
			],
			16 => [
				'biDirectionalConverterClassName' => NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter::class
			],
			17 => [
				'biDirectionalConverterClassName' => NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter::class
			],
			18 => [
				'biDirectionalConverterClassName' => NullableBooleanIntegerToNullableBooleanBiDirectionalConverter::class
			],
			19 => [
				'biDirectionalConverterClassName' => NullableBooleanStringToNullableBooleanBiDirectionalConverter::class
			],
			20 => [
				'biDirectionalConverterClassName' => NullableBooleanToNullableBooleanIntegerBiDirectionalConverter::class
			],
			21 => [
				'biDirectionalConverterClassName' => NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter::class
			],
			22 => [
				'biDirectionalConverterClassName' => NullableBooleanToNullableBooleanStringBiDirectionalConverter::class
			],
			23 => [
				'biDirectionalConverterClassName' => NullableFloatStringToNullableFloatBiDirectionalConverter::class
			],
			24 => [
				'biDirectionalConverterClassName' => NullableFloatToNullableFloatStringBiDirectionalConverter::class
			],
			25 => [
				'biDirectionalConverterClassName' => NullableIntegerStringToNullableIntegerBiDirectionalConverter::class
			],
			26 => [
				'biDirectionalConverterClassName' => NullableIntegerToNullableBinaryStringBiDirectionalConverter::class
			],
			27 => [
				'biDirectionalConverterClassName' => NullableIntegerToNullableIntegerStringBiDirectionalConverter::class
			],
			28 => [
				'biDirectionalConverterClassName' => NullStringToNullBiDirectionalConverter::class
			],
			29 => [
				'biDirectionalConverterClassName' => NullToNullStringBiDirectionalConverter::class
			]
		];
	}
}
