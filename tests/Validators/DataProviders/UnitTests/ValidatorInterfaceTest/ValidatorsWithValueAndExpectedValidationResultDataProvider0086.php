<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\NullableIsInArrayValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0086 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			86000 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86001 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86002 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86003 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86004 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86005 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86006 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86007 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86008 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86009 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86010 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86011 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86012 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86013 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86014 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86015 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86016 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86017 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86018 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86019 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86020 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86021 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86022 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86023 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86024 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86025 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86026 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86027 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86028 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86029 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86030 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86031 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86032 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86033 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86034 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86035 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86036 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86037 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86038 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86039 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86040 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86041 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86042 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86043 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86044 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86045 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86046 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86047 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86048 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86049 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86050 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86051 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86052 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86053 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86054 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86055 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86056 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86057 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86058 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86059 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86060 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86061 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86062 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86063 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86064 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86065 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86066 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86067 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86068 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86069 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86070 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86071 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86072 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86073 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86074 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86075 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86076 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			86077 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86078 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86079 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86080 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86081 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86082 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86083 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86084 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86085 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86086 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86087 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86088 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86089 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86090 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86091 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86092 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86093 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86094 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86095 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86096 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86097 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86098 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86099 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86100 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86101 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86102 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86103 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86104 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86105 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86106 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86107 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86108 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86109 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86110 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86111 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86112 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			86113 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86114 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86115 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86116 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86117 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86118 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86119 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86120 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86121 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86122 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86123 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86124 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86125 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86126 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86127 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86128 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86129 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86130 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86131 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86132 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86133 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86134 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86135 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86136 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86137 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86138 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86139 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86140 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86141 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86142 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86143 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86144 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86145 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86146 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86147 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86148 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86149 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86150 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86151 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86152 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86153 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86154 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86155 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86156 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86157 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86158 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86159 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86160 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86161 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86162 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86163 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86164 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86165 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86166 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86167 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86168 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86169 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86170 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86171 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86172 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86173 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86174 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86175 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86176 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86177 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86178 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86179 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86180 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86181 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86182 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86183 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86184 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86185 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86186 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86187 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86188 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86189 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86190 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86191 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86192 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86193 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86194 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86195 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86196 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86197 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86198 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86199 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86200 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86201 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86202 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86203 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86204 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86205 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86206 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86207 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86208 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86209 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86210 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86211 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86212 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86213 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86214 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86215 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86216 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86217 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86218 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86219 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86220 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86221 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86222 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86223 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86224 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86225 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86226 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86227 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86228 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86229 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86230 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86231 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86232 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86233 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86234 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86235 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86236 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86237 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86238 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86239 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86240 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86241 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86242 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86243 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86244 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86245 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86246 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86247 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86248 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86249 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86250 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86251 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86252 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86253 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86254 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86255 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86256 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86257 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86258 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86259 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86260 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86261 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86262 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86263 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86264 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86265 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86266 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86267 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86268 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86269 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86270 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86271 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86272 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86273 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86274 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86275 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86276 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86277 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86278 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86279 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86280 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86281 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86282 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86283 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			86284 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			86285 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86286 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86287 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86288 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86289 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86290 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86291 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86292 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86293 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86294 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86295 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86296 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86297 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86298 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86299 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86300 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86301 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86302 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86303 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86304 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86305 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86306 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86307 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86308 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86309 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86310 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86311 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86312 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86313 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86314 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86315 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86316 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86317 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86318 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86319 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86320 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			86321 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86322 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86323 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86324 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86325 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86326 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86327 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86328 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86329 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86330 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86331 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86332 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86333 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86334 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86335 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86336 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86337 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86338 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86339 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86340 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86341 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86342 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86343 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86344 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86345 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86346 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86347 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86348 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86349 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86350 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86351 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86352 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86353 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86354 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86355 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86356 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86357 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86358 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86359 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86360 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86361 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86362 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86363 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86364 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86365 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86366 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86367 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86368 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86369 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86370 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86371 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86372 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86373 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86374 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86375 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86376 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86377 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86378 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86379 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86380 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86381 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86382 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86383 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86384 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86385 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86386 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86387 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86388 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86389 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86390 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86391 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86392 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86393 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86394 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86395 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86396 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86397 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86398 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86399 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86400 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86401 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86402 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86403 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86404 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86405 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86406 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86407 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86408 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86409 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86410 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86411 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86412 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86413 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86414 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86415 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86416 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86417 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86418 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86419 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86420 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86421 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86422 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86423 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86424 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86425 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86426 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86427 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86428 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86429 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86430 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86431 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86432 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86433 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86434 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86435 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86436 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86437 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86438 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86439 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86440 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86441 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86442 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86443 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86444 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86445 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86446 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86447 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86448 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86449 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86450 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86451 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86452 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86453 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86454 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86455 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86456 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86457 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86458 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86459 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86460 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86461 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86462 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86463 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86464 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86465 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86466 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86467 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86468 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86469 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86470 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86471 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86472 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86473 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86474 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86475 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86476 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86477 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86478 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86479 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86480 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86481 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86482 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86483 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86484 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86485 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86486 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86487 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86488 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86489 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86490 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86491 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			86492 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			86493 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86494 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86495 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86496 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86497 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86498 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86499 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86500 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86501 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86502 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86503 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86504 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86505 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86506 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86507 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86508 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86509 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86510 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86511 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86512 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86513 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86514 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86515 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86516 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86517 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86518 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86519 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86520 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86521 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86522 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86523 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86524 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86525 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86526 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86527 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86528 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			86529 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86530 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86531 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86532 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86533 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86534 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86535 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86536 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86537 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86538 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86539 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86540 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86541 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86542 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86543 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86544 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86545 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86546 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86547 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86548 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86549 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86550 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86551 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86552 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86553 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86554 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86555 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86556 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86557 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86558 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86559 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86560 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86561 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86562 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86563 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86564 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86565 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86566 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86567 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86568 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86569 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86570 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86571 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86572 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86573 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86574 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86575 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86576 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86577 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86578 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86579 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86580 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86581 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86582 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86583 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86584 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86585 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86586 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86587 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86588 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86589 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86590 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86591 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86592 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86593 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86594 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86595 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86596 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86597 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86598 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86599 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86600 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86601 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86602 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86603 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86604 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86605 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86606 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86607 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86608 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86609 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86610 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86611 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86612 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86613 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86614 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86615 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86616 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86617 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86618 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86619 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86620 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86621 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86622 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86623 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86624 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86625 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86626 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86627 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86628 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86629 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86630 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86631 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86632 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86633 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86634 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86635 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86636 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86637 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86638 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86639 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86640 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86641 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86642 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86643 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86644 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86645 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86646 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86647 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86648 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86649 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86650 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86651 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86652 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86653 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86654 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86655 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86656 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86657 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86658 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86659 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86660 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86661 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86662 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86663 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86664 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86665 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86666 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86667 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86668 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86669 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86670 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86671 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86672 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86673 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86674 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86675 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86676 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86677 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86678 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86679 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86680 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86681 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86682 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86683 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86684 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86685 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86686 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86687 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86688 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86689 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86690 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86691 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86692 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86693 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86694 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86695 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86696 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86697 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86698 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86699 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86700 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86701 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86702 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86703 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86704 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86705 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			86706 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86707 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86708 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86709 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86710 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86711 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86712 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86713 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86714 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86715 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86716 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86717 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86718 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86719 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86720 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86721 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86722 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86723 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86724 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86725 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86726 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86727 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86728 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86729 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86730 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86731 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86732 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86733 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86734 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86735 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86736 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			86737 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86738 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86739 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86740 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86741 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86742 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86743 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86744 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86745 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86746 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86747 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86748 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86749 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86750 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86751 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86752 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86753 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86754 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86755 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86756 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86757 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86758 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86759 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86760 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86761 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86762 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86763 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86764 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86765 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86766 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86767 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86768 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86769 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86770 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86771 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86772 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86773 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86774 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86775 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86776 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86777 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86778 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86779 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86780 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86781 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86782 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86783 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86784 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86785 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86786 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86787 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86788 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86789 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86790 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86791 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86792 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86793 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86794 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86795 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86796 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86797 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86798 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86799 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86800 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86801 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86802 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86803 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86804 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86805 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86806 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86807 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86808 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86809 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86810 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86811 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86812 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86813 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86814 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86815 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86816 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86817 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86818 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86819 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86820 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86821 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86822 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86823 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86824 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86825 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86826 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86827 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86828 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86829 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86830 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86831 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86832 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86833 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86834 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86835 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86836 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86837 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86838 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86839 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86840 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86841 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86842 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86843 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86844 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86845 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86846 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86847 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86848 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86849 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86850 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86851 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86852 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86853 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86854 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86855 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86856 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86857 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86858 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86859 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86860 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86861 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86862 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86863 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86864 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86865 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86866 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86867 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86868 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86869 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86870 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86871 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86872 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86873 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86874 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86875 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86876 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86877 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86878 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86879 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86880 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86881 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86882 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86883 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86884 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86885 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86886 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86887 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86888 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86889 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86890 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86891 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86892 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86893 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86894 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86895 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86896 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86897 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86898 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86899 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86900 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86901 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86902 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86903 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86904 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86905 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86906 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86907 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86908 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86909 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86910 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86911 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86912 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86913 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86914 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			86915 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86916 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86917 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86918 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86919 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86920 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86921 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86922 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86923 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86924 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86925 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86926 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86927 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86928 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86929 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86930 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86931 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86932 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86933 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86934 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86935 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86936 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86937 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86938 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86939 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86940 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86941 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86942 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86943 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86944 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			86945 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86946 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86947 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86948 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86949 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86950 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86951 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86952 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86953 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86954 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86955 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86956 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86957 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86958 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86959 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86960 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86961 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86962 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86963 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86964 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86965 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86966 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86967 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86968 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86969 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86970 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86971 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86972 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86973 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86974 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86975 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86976 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86977 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86978 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86979 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86980 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86981 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86982 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86983 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86984 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86985 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86986 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86987 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86988 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86989 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86990 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86991 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86992 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86993 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86994 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86995 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86996 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86997 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86998 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			86999 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
