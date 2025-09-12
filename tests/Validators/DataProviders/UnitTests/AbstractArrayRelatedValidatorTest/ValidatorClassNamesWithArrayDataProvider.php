<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractArrayRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInArrayValidator;
use Override;

/**
 * Represents a data provider providing validator class names with array.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithArrayDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::BOOLEAN_ARRAY_1
			],
			1   => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::BOOLEAN_ARRAY_2
			],
			2   => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::BOOLEAN_MIXED_ARRAY_1
			],
			3   => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::BOOLEAN_MIXED_ARRAY_2
			],
			4   => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::BOOLEAN_INTEGER_ARRAY_1
			],
			5   => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::BOOLEAN_INTEGER_ARRAY_2
			],
			6   => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1
			],
			7   => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2
			],
			8   => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::BOOLEAN_INTEGER_STRING_ARRAY_1
			],
			9   => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::BOOLEAN_INTEGER_STRING_ARRAY_2
			],
			10  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1
			],
			11  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2
			],
			12  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::BOOLEAN_STRING_ARRAY_1
			],
			13  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::BOOLEAN_STRING_ARRAY_2
			],
			14  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::BOOLEAN_STRING_MIXED_ARRAY_1
			],
			15  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::BOOLEAN_STRING_MIXED_ARRAY_2
			],
			16  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::BINARY_STRING_ARRAY_1
			],
			17  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::BINARY_STRING_ARRAY_2
			],
			18  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::BINARY_STRING_MIXED_ARRAY_1
			],
			19  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::BINARY_STRING_MIXED_ARRAY_2
			],
			20  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::INTEGER_ARRAY_1
			],
			21  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::INTEGER_ARRAY_2
			],
			22  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::INTEGER_MIXED_ARRAY_1
			],
			23  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::INTEGER_MIXED_ARRAY_2
			],
			24  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::INTEGER_STRING_ARRAY_1
			],
			25  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::INTEGER_STRING_ARRAY_2
			],
			26  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::INTEGER_STRING_MIXED_ARRAY_1
			],
			27  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::INTEGER_STRING_MIXED_ARRAY_2
			],
			28  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::FLOAT_ARRAY_1
			],
			29  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::FLOAT_ARRAY_2
			],
			30  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::FLOAT_MIXED_ARRAY_1
			],
			31  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::FLOAT_MIXED_ARRAY_2
			],
			32  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::FLOAT_STRING_ARRAY_1
			],
			33  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::FLOAT_STRING_ARRAY_2
			],
			34  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::FLOAT_STRING_MIXED_ARRAY_1
			],
			35  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::FLOAT_STRING_MIXED_ARRAY_2
			],
			36  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::DATETIME_STRING_ARRAY_1
			],
			37  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::DATETIME_STRING_ARRAY_2
			],
			38  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::DATETIME_STRING_MIXED_ARRAY_1
			],
			39  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::DATETIME_STRING_MIXED_ARRAY_2
			],
			40  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::DATETIMEZONE_STRING_ARRAY_1
			],
			41  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::DATETIMEZONE_STRING_ARRAY_2
			],
			42  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1
			],
			43  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2
			],
			44  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::DATEINTERVAL_STRING_ARRAY_1
			],
			45  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::DATEINTERVAL_STRING_ARRAY_2
			],
			46  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1
			],
			47  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2
			],
			48  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::ENUM_ARRAY_1
			],
			49  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::ENUM_ARRAY_2
			],
			50  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::ENUM_MIXED_ARRAY_1
			],
			51  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::ENUM_MIXED_ARRAY_2
			],
			52  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::ENUM_NAME_ARRAY_1
			],
			53  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::ENUM_NAME_ARRAY_2
			],
			54  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::ENUM_NAME_MIXED_ARRAY_1
			],
			55  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::ENUM_NAME_MIXED_ARRAY_2
			],
			56  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::INTEGER_BACKED_ENUM_ARRAY_1
			],
			57  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::INTEGER_BACKED_ENUM_ARRAY_2
			],
			58  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1
			],
			59  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2
			],
			60  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1
			],
			61  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2
			],
			62  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1
			],
			63  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2
			],
			64  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::STRING_BACKED_ENUM_ARRAY_1
			],
			65  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::STRING_BACKED_ENUM_ARRAY_2
			],
			66  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1
			],
			67  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2
			],
			68  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::STRING_BACKED_ENUM_NAME_ARRAY_1
			],
			69  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::STRING_BACKED_ENUM_NAME_ARRAY_2
			],
			70  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1
			],
			71  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2
			],
			72  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::INTERFACE_NAME_ARRAY_1
			],
			73  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::INTERFACE_NAME_ARRAY_2
			],
			74  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::INTERFACE_NAME_MIXED_ARRAY_1
			],
			75  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::INTERFACE_NAME_MIXED_ARRAY_2
			],
			76  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::CONCRETE_INTERFACE_NAME_ARRAY_1
			],
			77  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::CONCRETE_INTERFACE_NAME_ARRAY_2
			],
			78  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1
			],
			79  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2
			],
			80  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::CLASS_NAME_ARRAY_1
			],
			81  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::CLASS_NAME_ARRAY_2
			],
			82  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::CLASS_NAME_MIXED_ARRAY_1
			],
			83  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::CLASS_NAME_MIXED_ARRAY_2
			],
			84  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::TRAIT_NAME_ARRAY_1
			],
			85  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::TRAIT_NAME_ARRAY_2
			],
			86  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::TRAIT_NAME_MIXED_ARRAY_1
			],
			87  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::TRAIT_NAME_MIXED_ARRAY_2
			],
			88  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createDateTimeImmutableObjectArray1(),
			],
			89  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createDateTimeImmutableObjectArray2(),
			],
			90  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createDateTimeImmutableObjectMixedArray1(),
			],
			91  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createDateTimeImmutableObjectMixedArray2(),
			],
			92  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createDateTimeObjectArray1(),
			],
			93  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createDateTimeObjectArray2(),
			],
			94  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createDateTimeObjectMixedArray1(),
			],
			95  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createDateTimeObjectMixedArray2(),
			],
			96  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createDateTimeZoneObjectMixedArray1(),
			],
			97  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createDateTimeZoneObjectMixedArray2(),
			],
			98  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createDateIntervalObjectArray1(),
			],
			99  => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createDateIntervalObjectArray2(),
			],
			100 => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createDateIntervalObjectMixedArray1(),
			],
			101 => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createDateIntervalObjectMixedArray2(),
			],
			102 => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createConcreteInterfaceFixtureArray2(),
			],
			103 => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createConcreteInterfaceFixtureArray2(),
			],
			104 => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createConcreteInterfaceFixtureMixedArray2(),
			],
			105 => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createConcreteInterfaceFixtureMixedArray2(),
			],
			106 => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createClassFixtureArray2(),
			],
			107 => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createClassFixtureArray2(),
			],
			108 => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createClassFixtureMixedArray2()
			],
			109 => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createClassFixtureMixedArray2()
			],
			110 => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createMixedValuesArray1()
			],
			111 => [
				'validatorClassName' => IsInArrayValidator::class,
				'array'              => Values::createMixedValuesArray2()
			],
			112 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::BOOLEAN_ARRAY_1
			],
			113 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::BOOLEAN_ARRAY_2
			],
			114 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::BOOLEAN_MIXED_ARRAY_1
			],
			115 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::BOOLEAN_MIXED_ARRAY_2
			],
			116 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::BOOLEAN_INTEGER_ARRAY_1
			],
			117 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::BOOLEAN_INTEGER_ARRAY_2
			],
			118 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1
			],
			119 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2
			],
			120 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::BOOLEAN_INTEGER_STRING_ARRAY_1
			],
			121 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::BOOLEAN_INTEGER_STRING_ARRAY_2
			],
			122 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1
			],
			123 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2
			],
			124 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::BOOLEAN_STRING_ARRAY_1
			],
			125 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::BOOLEAN_STRING_ARRAY_2
			],
			126 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::BOOLEAN_STRING_MIXED_ARRAY_1
			],
			127 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::BOOLEAN_STRING_MIXED_ARRAY_2
			],
			128 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::BINARY_STRING_ARRAY_1
			],
			129 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::BINARY_STRING_ARRAY_2
			],
			130 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::BINARY_STRING_MIXED_ARRAY_1
			],
			131 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::BINARY_STRING_MIXED_ARRAY_2
			],
			132 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::INTEGER_ARRAY_1
			],
			133 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::INTEGER_ARRAY_2
			],
			134 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::INTEGER_MIXED_ARRAY_1
			],
			135 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::INTEGER_MIXED_ARRAY_2
			],
			136 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::INTEGER_STRING_ARRAY_1
			],
			137 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::INTEGER_STRING_ARRAY_2
			],
			138 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::INTEGER_STRING_MIXED_ARRAY_1
			],
			139 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::INTEGER_STRING_MIXED_ARRAY_2
			],
			140 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::FLOAT_ARRAY_1
			],
			141 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::FLOAT_ARRAY_2
			],
			142 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::FLOAT_MIXED_ARRAY_1
			],
			143 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::FLOAT_MIXED_ARRAY_2
			],
			144 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::FLOAT_STRING_ARRAY_1
			],
			145 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::FLOAT_STRING_ARRAY_2
			],
			146 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::FLOAT_STRING_MIXED_ARRAY_1
			],
			147 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::FLOAT_STRING_MIXED_ARRAY_2
			],
			148 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::DATETIME_STRING_ARRAY_1
			],
			149 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::DATETIME_STRING_ARRAY_2
			],
			150 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::DATETIME_STRING_MIXED_ARRAY_1
			],
			151 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::DATETIME_STRING_MIXED_ARRAY_2
			],
			152 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::DATETIMEZONE_STRING_ARRAY_1
			],
			153 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::DATETIMEZONE_STRING_ARRAY_2
			],
			154 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1
			],
			155 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2
			],
			156 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::DATEINTERVAL_STRING_ARRAY_1
			],
			157 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::DATEINTERVAL_STRING_ARRAY_2
			],
			158 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1
			],
			159 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2
			],
			160 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::ENUM_ARRAY_1
			],
			161 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::ENUM_ARRAY_2
			],
			162 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::ENUM_MIXED_ARRAY_1
			],
			163 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::ENUM_MIXED_ARRAY_2
			],
			164 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::ENUM_NAME_ARRAY_1
			],
			165 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::ENUM_NAME_ARRAY_2
			],
			166 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::ENUM_NAME_MIXED_ARRAY_1
			],
			167 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::ENUM_NAME_MIXED_ARRAY_2
			],
			168 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::INTEGER_BACKED_ENUM_ARRAY_1
			],
			169 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::INTEGER_BACKED_ENUM_ARRAY_2
			],
			170 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1
			],
			171 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2
			],
			172 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1
			],
			173 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2
			],
			174 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1
			],
			175 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2
			],
			176 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::STRING_BACKED_ENUM_ARRAY_1
			],
			177 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::STRING_BACKED_ENUM_ARRAY_2
			],
			178 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1
			],
			179 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2
			],
			180 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::STRING_BACKED_ENUM_NAME_ARRAY_1
			],
			181 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::STRING_BACKED_ENUM_NAME_ARRAY_2
			],
			182 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1
			],
			183 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2
			],
			184 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::INTERFACE_NAME_ARRAY_1
			],
			185 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::INTERFACE_NAME_ARRAY_2
			],
			186 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::INTERFACE_NAME_MIXED_ARRAY_1
			],
			187 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::INTERFACE_NAME_MIXED_ARRAY_2
			],
			188 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::CONCRETE_INTERFACE_NAME_ARRAY_1
			],
			189 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::CONCRETE_INTERFACE_NAME_ARRAY_2
			],
			190 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1
			],
			191 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2
			],
			192 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::CLASS_NAME_ARRAY_1
			],
			193 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::CLASS_NAME_ARRAY_2
			],
			194 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::CLASS_NAME_MIXED_ARRAY_1
			],
			195 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::CLASS_NAME_MIXED_ARRAY_2
			],
			196 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::TRAIT_NAME_ARRAY_1
			],
			197 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::TRAIT_NAME_ARRAY_2
			],
			198 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::TRAIT_NAME_MIXED_ARRAY_1
			],
			199 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::TRAIT_NAME_MIXED_ARRAY_2
			],
			200 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createDateTimeImmutableObjectArray1(),
			],
			201 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createDateTimeImmutableObjectArray2(),
			],
			202 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createDateTimeImmutableObjectMixedArray1(),
			],
			203 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createDateTimeImmutableObjectMixedArray2(),
			],
			204 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createDateTimeObjectArray1(),
			],
			205 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createDateTimeObjectArray2(),
			],
			206 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createDateTimeObjectMixedArray1(),
			],
			207 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createDateTimeObjectMixedArray2(),
			],
			208 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createDateTimeZoneObjectArray1(),
			],
			209 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createDateTimeZoneObjectArray2(),
			],
			210 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createDateTimeZoneObjectMixedArray1(),
			],
			211 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createDateTimeZoneObjectMixedArray2(),
			],
			212 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createDateIntervalObjectArray1(),
			],
			213 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createDateIntervalObjectArray2(),
			],
			214 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createDateIntervalObjectMixedArray1(),
			],
			215 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createDateIntervalObjectMixedArray2(),
			],
			216 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createConcreteInterfaceFixtureArray2(),
			],
			217 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createConcreteInterfaceFixtureArray2(),
			],
			218 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createConcreteInterfaceFixtureMixedArray2(),
			],
			219 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createConcreteInterfaceFixtureMixedArray2(),
			],
			220 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createClassFixtureArray2(),
			],
			221 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createClassFixtureArray2(),
			],
			222 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createClassFixtureMixedArray2()
			],
			223 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createClassFixtureMixedArray2()
			],
			224 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createMixedValuesArray1()
			],
			225 => [
				'validatorClassName' => NullableIsInArrayValidator::class,
				'array'              => Values::createMixedValuesArray2()
			]
		];
	}
}
