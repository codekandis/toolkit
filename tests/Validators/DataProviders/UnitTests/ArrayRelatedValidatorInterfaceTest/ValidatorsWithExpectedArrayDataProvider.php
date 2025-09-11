<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ArrayRelatedValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInArrayValidator;
use Override;

/**
 * Represents a data provider providing validators with expected array.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithExpectedArrayDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'validator'     => new IsInArrayValidator( $array = Values::BOOLEAN_ARRAY_1 ),
				'expectedArray' => $array
			],
			1   => [
				'validator'     => new IsInArrayValidator( $array = Values::BOOLEAN_ARRAY_2 ),
				'expectedArray' => $array
			],
			2   => [
				'validator'     => new IsInArrayValidator( $array = Values::BOOLEAN_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			3   => [
				'validator'     => new IsInArrayValidator( $array = Values::BOOLEAN_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			4   => [
				'validator'     => new IsInArrayValidator( $array = Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'expectedArray' => $array
			],
			5   => [
				'validator'     => new IsInArrayValidator( $array = Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'expectedArray' => $array
			],
			6   => [
				'validator'     => new IsInArrayValidator( $array = Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			7   => [
				'validator'     => new IsInArrayValidator( $array = Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			8   => [
				'validator'     => new IsInArrayValidator( $array = Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'expectedArray' => $array
			],
			9   => [
				'validator'     => new IsInArrayValidator( $array = Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'expectedArray' => $array
			],
			10  => [
				'validator'     => new IsInArrayValidator( $array = Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			11  => [
				'validator'     => new IsInArrayValidator( $array = Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			12  => [
				'validator'     => new IsInArrayValidator( $array = Values::BOOLEAN_STRING_ARRAY_1 ),
				'expectedArray' => $array
			],
			13  => [
				'validator'     => new IsInArrayValidator( $array = Values::BOOLEAN_STRING_ARRAY_2 ),
				'expectedArray' => $array
			],
			14  => [
				'validator'     => new IsInArrayValidator( $array = Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			15  => [
				'validator'     => new IsInArrayValidator( $array = Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			16  => [
				'validator'     => new IsInArrayValidator( $array = Values::BINARY_STRING_ARRAY_1 ),
				'expectedArray' => $array
			],
			17  => [
				'validator'     => new IsInArrayValidator( $array = Values::BINARY_STRING_ARRAY_2 ),
				'expectedArray' => $array
			],
			18  => [
				'validator'     => new IsInArrayValidator( $array = Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			19  => [
				'validator'     => new IsInArrayValidator( $array = Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			20  => [
				'validator'     => new IsInArrayValidator( $array = Values::INTEGER_ARRAY_1 ),
				'expectedArray' => $array
			],
			21  => [
				'validator'     => new IsInArrayValidator( $array = Values::INTEGER_ARRAY_2 ),
				'expectedArray' => $array
			],
			22  => [
				'validator'     => new IsInArrayValidator( $array = Values::INTEGER_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			23  => [
				'validator'     => new IsInArrayValidator( $array = Values::INTEGER_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			24  => [
				'validator'     => new IsInArrayValidator( $array = Values::INTEGER_STRING_ARRAY_1 ),
				'expectedArray' => $array
			],
			25  => [
				'validator'     => new IsInArrayValidator( $array = Values::INTEGER_STRING_ARRAY_2 ),
				'expectedArray' => $array
			],
			26  => [
				'validator'     => new IsInArrayValidator( $array = Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			27  => [
				'validator'     => new IsInArrayValidator( $array = Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			28  => [
				'validator'     => new IsInArrayValidator( $array = Values::FLOAT_ARRAY_1 ),
				'expectedArray' => $array
			],
			29  => [
				'validator'     => new IsInArrayValidator( $array = Values::FLOAT_ARRAY_2 ),
				'expectedArray' => $array
			],
			30  => [
				'validator'     => new IsInArrayValidator( $array = Values::FLOAT_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			31  => [
				'validator'     => new IsInArrayValidator( $array = Values::FLOAT_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			32  => [
				'validator'     => new IsInArrayValidator( $array = Values::FLOAT_STRING_ARRAY_1 ),
				'expectedArray' => $array
			],
			33  => [
				'validator'     => new IsInArrayValidator( $array = Values::FLOAT_STRING_ARRAY_2 ),
				'expectedArray' => $array
			],
			34  => [
				'validator'     => new IsInArrayValidator( $array = Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			35  => [
				'validator'     => new IsInArrayValidator( $array = Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			36  => [
				'validator'     => new IsInArrayValidator( $array = Values::DATETIME_STRING_ARRAY_1 ),
				'expectedArray' => $array
			],
			37  => [
				'validator'     => new IsInArrayValidator( $array = Values::DATETIME_STRING_ARRAY_2 ),
				'expectedArray' => $array
			],
			38  => [
				'validator'     => new IsInArrayValidator( $array = Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			39  => [
				'validator'     => new IsInArrayValidator( $array = Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			40  => [
				'validator'     => new IsInArrayValidator( $array = Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'expectedArray' => $array
			],
			41  => [
				'validator'     => new IsInArrayValidator( $array = Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'expectedArray' => $array
			],
			42  => [
				'validator'     => new IsInArrayValidator( $array = Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			43  => [
				'validator'     => new IsInArrayValidator( $array = Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			44  => [
				'validator'     => new IsInArrayValidator( $array = Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'expectedArray' => $array
			],
			45  => [
				'validator'     => new IsInArrayValidator( $array = Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'expectedArray' => $array
			],
			46  => [
				'validator'     => new IsInArrayValidator( $array = Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			47  => [
				'validator'     => new IsInArrayValidator( $array = Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			48  => [
				'validator'     => new IsInArrayValidator( $array = Values::ENUM_ARRAY_1 ),
				'expectedArray' => $array
			],
			49  => [
				'validator'     => new IsInArrayValidator( $array = Values::ENUM_ARRAY_2 ),
				'expectedArray' => $array
			],
			50  => [
				'validator'     => new IsInArrayValidator( $array = Values::ENUM_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			51  => [
				'validator'     => new IsInArrayValidator( $array = Values::ENUM_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			52  => [
				'validator'     => new IsInArrayValidator( $array = Values::ENUM_NAME_ARRAY_1 ),
				'expectedArray' => $array
			],
			53  => [
				'validator'     => new IsInArrayValidator( $array = Values::ENUM_NAME_ARRAY_2 ),
				'expectedArray' => $array
			],
			54  => [
				'validator'     => new IsInArrayValidator( $array = Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			55  => [
				'validator'     => new IsInArrayValidator( $array = Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			56  => [
				'validator'     => new IsInArrayValidator( $array = Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'expectedArray' => $array
			],
			57  => [
				'validator'     => new IsInArrayValidator( $array = Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'expectedArray' => $array
			],
			58  => [
				'validator'     => new IsInArrayValidator( $array = Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			59  => [
				'validator'     => new IsInArrayValidator( $array = Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			60  => [
				'validator'     => new IsInArrayValidator( $array = Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'expectedArray' => $array
			],
			61  => [
				'validator'     => new IsInArrayValidator( $array = Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'expectedArray' => $array
			],
			62  => [
				'validator'     => new IsInArrayValidator( $array = Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			63  => [
				'validator'     => new IsInArrayValidator( $array = Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			64  => [
				'validator'     => new IsInArrayValidator( $array = Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'expectedArray' => $array
			],
			65  => [
				'validator'     => new IsInArrayValidator( $array = Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'expectedArray' => $array
			],
			66  => [
				'validator'     => new IsInArrayValidator( $array = Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			67  => [
				'validator'     => new IsInArrayValidator( $array = Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			68  => [
				'validator'     => new IsInArrayValidator( $array = Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'expectedArray' => $array
			],
			69  => [
				'validator'     => new IsInArrayValidator( $array = Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'expectedArray' => $array
			],
			70  => [
				'validator'     => new IsInArrayValidator( $array = Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			71  => [
				'validator'     => new IsInArrayValidator( $array = Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			72  => [
				'validator'     => new IsInArrayValidator( $array = Values::INTERFACE_NAME_ARRAY_1 ),
				'expectedArray' => $array
			],
			73  => [
				'validator'     => new IsInArrayValidator( $array = Values::INTERFACE_NAME_ARRAY_2 ),
				'expectedArray' => $array
			],
			74  => [
				'validator'     => new IsInArrayValidator( $array = Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			75  => [
				'validator'     => new IsInArrayValidator( $array = Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			76  => [
				'validator'     => new IsInArrayValidator( $array = Values::CONCRETE_INTERFACE_NAME_ARRAY_1 ),
				'expectedArray' => $array
			],
			77  => [
				'validator'     => new IsInArrayValidator( $array = Values::CONCRETE_INTERFACE_NAME_ARRAY_2 ),
				'expectedArray' => $array
			],
			78  => [
				'validator'     => new IsInArrayValidator( $array = Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			79  => [
				'validator'     => new IsInArrayValidator( $array = Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			80  => [
				'validator'     => new IsInArrayValidator( $array = Values::CLASS_NAME_ARRAY_1 ),
				'expectedArray' => $array
			],
			81  => [
				'validator'     => new IsInArrayValidator( $array = Values::CLASS_NAME_ARRAY_2 ),
				'expectedArray' => $array
			],
			82  => [
				'validator'     => new IsInArrayValidator( $array = Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			83  => [
				'validator'     => new IsInArrayValidator( $array = Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			84  => [
				'validator'     => new IsInArrayValidator( $array = Values::TRAIT_NAME_ARRAY_1 ),
				'expectedArray' => $array
			],
			85  => [
				'validator'     => new IsInArrayValidator( $array = Values::TRAIT_NAME_ARRAY_2 ),
				'expectedArray' => $array
			],
			86  => [
				'validator'     => new IsInArrayValidator( $array = Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			87  => [
				'validator'     => new IsInArrayValidator( $array = Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			88  => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createDateTimeImmutableObjectArray1()
				),
				'expectedArray' => $array
			],
			89  => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createDateTimeImmutableObjectArray2()
				),
				'expectedArray' => $array
			],
			90  => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createDateTimeImmutableObjectMixedArray1()
				),
				'expectedArray' => $array
			],
			91  => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createDateTimeImmutableObjectMixedArray2()
				),
				'expectedArray' => $array
			],
			92  => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createDateTimeObjectArray1()
				),
				'expectedArray' => $array
			],
			93  => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createDateTimeObjectArray2()
				),
				'expectedArray' => $array
			],
			94  => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createDateTimeObjectMixedArray1()
				),
				'expectedArray' => $array
			],
			95  => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createDateTimeObjectMixedArray2()
				),
				'expectedArray' => $array
			],
			96  => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createDateTimeZoneObjectMixedArray1()
				),
				'expectedArray' => $array
			],
			97  => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createDateTimeZoneObjectMixedArray2()
				),
				'expectedArray' => $array
			],
			98  => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createDateIntervalObjectArray1()
				),
				'expectedArray' => $array
			],
			99  => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createDateIntervalObjectArray2()
				),
				'expectedArray' => $array
			],
			100 => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createDateIntervalObjectMixedArray1()
				),
				'expectedArray' => $array
			],
			101 => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createDateIntervalObjectMixedArray2()
				),
				'expectedArray' => $array
			],
			102 => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createConcreteInterfaceFixtureArray2()
				),
				'expectedArray' => $array
			],
			103 => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createConcreteInterfaceFixtureArray2()
				),
				'expectedArray' => $array
			],
			104 => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createConcreteInterfaceFixtureMixedArray2()
				),
				'expectedArray' => $array
			],
			105 => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createConcreteInterfaceFixtureMixedArray2()
				),
				'expectedArray' => $array
			],
			106 => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createClassFixtureArray2()
				),
				'expectedArray' => $array
			],
			107 => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createClassFixtureArray2()
				),
				'expectedArray' => $array
			],
			108 => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createClassFixtureMixedArray2()
				),
				'expectedArray' => $array
			],
			109 => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createClassFixtureMixedArray2()
				),
				'expectedArray' => $array
			],
			110 => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createMixedValuesArray1()
				),
				'expectedArray' => $array
			],
			111 => [
				'validator'     => new IsInArrayValidator(
					$array = Values::createMixedValuesArray2()
				),
				'expectedArray' => $array
			],
			112 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::BOOLEAN_ARRAY_1 ),
				'expectedArray' => $array
			],
			113 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::BOOLEAN_ARRAY_2 ),
				'expectedArray' => $array
			],
			114 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::BOOLEAN_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			115 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::BOOLEAN_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			116 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'expectedArray' => $array
			],
			117 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'expectedArray' => $array
			],
			118 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			119 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			120 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'expectedArray' => $array
			],
			121 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'expectedArray' => $array
			],
			122 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			123 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			124 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::BOOLEAN_STRING_ARRAY_1 ),
				'expectedArray' => $array
			],
			125 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::BOOLEAN_STRING_ARRAY_2 ),
				'expectedArray' => $array
			],
			126 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			127 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			128 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::BINARY_STRING_ARRAY_1 ),
				'expectedArray' => $array
			],
			129 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::BINARY_STRING_ARRAY_2 ),
				'expectedArray' => $array
			],
			130 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			131 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			132 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::INTEGER_ARRAY_1 ),
				'expectedArray' => $array
			],
			133 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::INTEGER_ARRAY_2 ),
				'expectedArray' => $array
			],
			134 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::INTEGER_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			135 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::INTEGER_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			136 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::INTEGER_STRING_ARRAY_1 ),
				'expectedArray' => $array
			],
			137 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::INTEGER_STRING_ARRAY_2 ),
				'expectedArray' => $array
			],
			138 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			139 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			140 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::FLOAT_ARRAY_1 ),
				'expectedArray' => $array
			],
			141 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::FLOAT_ARRAY_2 ),
				'expectedArray' => $array
			],
			142 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::FLOAT_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			143 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::FLOAT_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			144 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::FLOAT_STRING_ARRAY_1 ),
				'expectedArray' => $array
			],
			145 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::FLOAT_STRING_ARRAY_2 ),
				'expectedArray' => $array
			],
			146 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			147 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			148 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::DATETIME_STRING_ARRAY_1 ),
				'expectedArray' => $array
			],
			149 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::DATETIME_STRING_ARRAY_2 ),
				'expectedArray' => $array
			],
			150 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			151 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			152 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'expectedArray' => $array
			],
			153 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'expectedArray' => $array
			],
			154 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			155 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			156 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'expectedArray' => $array
			],
			157 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'expectedArray' => $array
			],
			158 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			159 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			160 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::ENUM_ARRAY_1 ),
				'expectedArray' => $array
			],
			161 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::ENUM_ARRAY_2 ),
				'expectedArray' => $array
			],
			162 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::ENUM_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			163 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::ENUM_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			164 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::ENUM_NAME_ARRAY_1 ),
				'expectedArray' => $array
			],
			165 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::ENUM_NAME_ARRAY_2 ),
				'expectedArray' => $array
			],
			166 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			167 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			168 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'expectedArray' => $array
			],
			169 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'expectedArray' => $array
			],
			170 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			171 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			172 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'expectedArray' => $array
			],
			173 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'expectedArray' => $array
			],
			174 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			175 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			176 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'expectedArray' => $array
			],
			177 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'expectedArray' => $array
			],
			178 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			179 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			180 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'expectedArray' => $array
			],
			181 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'expectedArray' => $array
			],
			182 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			183 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			184 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::INTERFACE_NAME_ARRAY_1 ),
				'expectedArray' => $array
			],
			185 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::INTERFACE_NAME_ARRAY_2 ),
				'expectedArray' => $array
			],
			186 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			187 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			188 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::CONCRETE_INTERFACE_NAME_ARRAY_1 ),
				'expectedArray' => $array
			],
			189 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::CONCRETE_INTERFACE_NAME_ARRAY_2 ),
				'expectedArray' => $array
			],
			190 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			191 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			192 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::CLASS_NAME_ARRAY_1 ),
				'expectedArray' => $array
			],
			193 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::CLASS_NAME_ARRAY_2 ),
				'expectedArray' => $array
			],
			194 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			195 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			196 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::TRAIT_NAME_ARRAY_1 ),
				'expectedArray' => $array
			],
			197 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::TRAIT_NAME_ARRAY_2 ),
				'expectedArray' => $array
			],
			198 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'expectedArray' => $array
			],
			199 => [
				'validator'     => new NullableIsInArrayValidator( $array = Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'expectedArray' => $array
			],
			200 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createDateTimeImmutableObjectArray1()
				),
				'expectedArray' => $array
			],
			201 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createDateTimeImmutableObjectArray2()
				),
				'expectedArray' => $array
			],
			202 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createDateTimeImmutableObjectMixedArray1()
				),
				'expectedArray' => $array
			],
			203 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createDateTimeImmutableObjectMixedArray2()
				),
				'expectedArray' => $array
			],
			204 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createDateTimeObjectArray1()
				),
				'expectedArray' => $array
			],
			205 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createDateTimeObjectArray2()
				),
				'expectedArray' => $array
			],
			206 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createDateTimeObjectMixedArray1()
				),
				'expectedArray' => $array
			],
			207 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createDateTimeObjectMixedArray2()
				),
				'expectedArray' => $array
			],
			208 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createDateTimeZoneObjectMixedArray1()
				),
				'expectedArray' => $array
			],
			209 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createDateTimeZoneObjectMixedArray2()
				),
				'expectedArray' => $array
			],
			210 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createDateIntervalObjectArray1()
				),
				'expectedArray' => $array
			],
			211 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createDateIntervalObjectArray2()
				),
				'expectedArray' => $array
			],
			212 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createDateIntervalObjectMixedArray1()
				),
				'expectedArray' => $array
			],
			213 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createDateIntervalObjectMixedArray2()
				),
				'expectedArray' => $array
			],
			214 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createConcreteInterfaceFixtureArray2()
				),
				'expectedArray' => $array
			],
			215 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createConcreteInterfaceFixtureArray2()
				),
				'expectedArray' => $array
			],
			216 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createConcreteInterfaceFixtureMixedArray2()
				),
				'expectedArray' => $array
			],
			217 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createConcreteInterfaceFixtureMixedArray2()
				),
				'expectedArray' => $array
			],
			218 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createClassFixtureArray2()
				),
				'expectedArray' => $array
			],
			219 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createClassFixtureArray2()
				),
				'expectedArray' => $array
			],
			220 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createClassFixtureMixedArray2()
				),
				'expectedArray' => $array
			],
			221 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createClassFixtureMixedArray2()
				),
				'expectedArray' => $array
			],
			222 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createMixedValuesArray1()
				),
				'expectedArray' => $array
			],
			223 => [
				'validator'     => new NullableIsInArrayValidator(
					$array = Values::createMixedValuesArray2()
				),
				'expectedArray' => $array
			]
		];
	}
}
