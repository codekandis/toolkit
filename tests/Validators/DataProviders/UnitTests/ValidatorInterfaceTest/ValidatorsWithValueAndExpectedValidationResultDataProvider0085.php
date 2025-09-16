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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0085 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			85000 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85001 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85002 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85003 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85004 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85005 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85006 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85007 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85008 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85009 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85010 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85011 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85012 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85013 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85014 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85015 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85016 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85017 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85018 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85019 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85020 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85021 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85022 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85023 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85024 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85025 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85026 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85027 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85028 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85029 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			85030 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85031 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85032 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85033 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85034 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85035 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85036 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85037 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85038 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85039 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85040 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85041 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85042 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85043 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85044 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85045 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85046 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85047 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85048 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85049 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85050 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85051 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85052 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85053 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85054 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85055 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85056 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85057 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85058 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85059 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85060 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85061 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85062 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85063 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85064 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85065 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85066 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85067 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85068 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85069 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85070 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85071 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85072 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			85073 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85074 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85075 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85076 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85077 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85078 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85079 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85080 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85081 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85082 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85083 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85084 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85085 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85086 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85087 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85088 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85089 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85090 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85091 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85092 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85093 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85094 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85095 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85096 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85097 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85098 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85099 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85100 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85101 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85102 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85103 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85104 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85105 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85106 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85107 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85108 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85109 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85110 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85111 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85112 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85113 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85114 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85115 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85116 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85117 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85118 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85119 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85120 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85121 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85122 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85123 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85124 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85125 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85126 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85127 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85128 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85129 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85130 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85131 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85132 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85133 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85134 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85135 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85136 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85137 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85138 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85139 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85140 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85141 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85142 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85143 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85144 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85145 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85146 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85147 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85148 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85149 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85150 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85151 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85152 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85153 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85154 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85155 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85156 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85157 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85158 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85159 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85160 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85161 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85162 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85163 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85164 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85165 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85166 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85167 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85168 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85169 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85170 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85171 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85172 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85173 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85174 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85175 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85176 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85177 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85178 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85179 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85180 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85181 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85182 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85183 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85184 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85185 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85186 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85187 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85188 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85189 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85190 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85191 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85192 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85193 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85194 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85195 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85196 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85197 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85198 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85199 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85200 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85201 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85202 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85203 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85204 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85205 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85206 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85207 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85208 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85209 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85210 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85211 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85212 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85213 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85214 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85215 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85216 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85217 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85218 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85219 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85220 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85221 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85222 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85223 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85224 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85225 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85226 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85227 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85228 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85229 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85230 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85231 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85232 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85233 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85234 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85235 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85236 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85237 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85238 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			85239 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85240 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85241 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85242 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85243 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85244 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85245 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85246 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85247 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85248 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85249 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85250 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85251 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85252 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85253 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85254 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85255 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85256 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85257 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85258 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85259 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85260 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85261 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85262 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85263 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85264 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85265 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85266 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85267 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85268 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85269 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85270 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85271 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85272 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85273 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85274 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85275 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85276 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85277 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85278 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85279 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85280 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			85281 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85282 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85283 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85284 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85285 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85286 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85287 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85288 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85289 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85290 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85291 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85292 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85293 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85294 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85295 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85296 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85297 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85298 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85299 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85300 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85301 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85302 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85303 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85304 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85305 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85306 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85307 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85308 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85309 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85310 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85311 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85312 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85313 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85314 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85315 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85316 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85317 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85318 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85319 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85320 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85321 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85322 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85323 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85324 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85325 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85326 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85327 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85328 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85329 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85330 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85331 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85332 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85333 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85334 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85335 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85336 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85337 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85338 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85339 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85340 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85341 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85342 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85343 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85344 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85345 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85346 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85347 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85348 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85349 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85350 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85351 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85352 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85353 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85354 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85355 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85356 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85357 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85358 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85359 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85360 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85361 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85362 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85363 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85364 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85365 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85366 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85367 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85368 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85369 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85370 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85371 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85372 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85373 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85374 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85375 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85376 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85377 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85378 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85379 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85380 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85381 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85382 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85383 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85384 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85385 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85386 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85387 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85388 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85389 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85390 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85391 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85392 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85393 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85394 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85395 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85396 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85397 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85398 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85399 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85400 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85401 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85402 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85403 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85404 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85405 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85406 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85407 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85408 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85409 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85410 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85411 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85412 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85413 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85414 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85415 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85416 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85417 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85418 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85419 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85420 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85421 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85422 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85423 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85424 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85425 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85426 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85427 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85428 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85429 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85430 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85431 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85432 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85433 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85434 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85435 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85436 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85437 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85438 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85439 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85440 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85441 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85442 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85443 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85444 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85445 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			85446 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			85447 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85448 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85449 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85450 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85451 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85452 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85453 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85454 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85455 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85456 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85457 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85458 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85459 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85460 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85461 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85462 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85463 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85464 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85465 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85466 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85467 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85468 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85469 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85470 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85471 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85472 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85473 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85474 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85475 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85476 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85477 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85478 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85479 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85480 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85481 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85482 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85483 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85484 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85485 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85486 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85487 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85488 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			85489 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85490 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85491 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85492 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85493 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85494 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85495 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85496 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85497 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85498 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85499 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85500 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85501 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85502 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85503 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85504 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85505 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85506 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85507 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85508 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85509 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85510 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85511 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85512 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85513 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85514 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85515 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85516 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85517 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85518 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85519 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85520 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85521 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85522 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85523 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85524 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85525 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85526 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85527 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85528 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85529 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85530 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85531 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85532 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85533 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85534 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85535 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85536 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85537 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85538 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85539 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85540 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85541 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85542 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85543 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85544 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85545 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85546 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85547 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85548 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85549 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85550 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85551 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85552 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85553 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85554 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85555 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85556 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85557 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85558 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85559 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85560 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85561 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85562 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85563 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85564 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85565 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85566 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85567 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85568 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85569 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85570 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85571 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85572 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85573 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85574 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85575 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85576 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85577 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85578 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85579 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85580 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85581 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85582 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85583 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85584 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85585 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85586 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85587 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85588 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85589 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85590 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85591 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85592 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85593 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85594 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85595 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85596 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85597 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85598 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85599 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85600 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85601 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85602 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85603 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85604 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85605 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85606 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85607 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85608 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85609 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85610 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85611 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85612 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85613 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85614 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85615 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85616 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85617 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85618 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85619 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85620 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85621 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85622 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85623 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85624 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85625 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85626 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85627 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85628 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85629 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85630 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85631 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85632 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85633 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85634 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85635 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85636 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85637 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85638 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85639 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85640 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85641 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85642 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85643 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85644 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85645 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85646 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85647 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85648 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85649 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85650 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85651 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85652 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85653 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			85654 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			85655 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85656 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85657 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85658 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85659 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85660 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85661 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85662 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85663 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85664 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85665 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85666 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85667 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85668 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85669 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85670 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85671 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85672 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85673 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85674 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85675 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85676 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85677 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85678 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85679 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85680 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85681 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85682 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85683 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85684 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85685 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85686 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85687 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85688 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85689 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85690 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85691 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85692 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85693 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85694 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85695 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85696 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			85697 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85698 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85699 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85700 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85701 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85702 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85703 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85704 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85705 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85706 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85707 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85708 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85709 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85710 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85711 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85712 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85713 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85714 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85715 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85716 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85717 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85718 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85719 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85720 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85721 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85722 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85723 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85724 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85725 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85726 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85727 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85728 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85729 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85730 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85731 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85732 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85733 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85734 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85735 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85736 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85737 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85738 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85739 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85740 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85741 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85742 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85743 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85744 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85745 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85746 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85747 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85748 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85749 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85750 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85751 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85752 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85753 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85754 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85755 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85756 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85757 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85758 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85759 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85760 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85761 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85762 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85763 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85764 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85765 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85766 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85767 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85768 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85769 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85770 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85771 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85772 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85773 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85774 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85775 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85776 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85777 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85778 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85779 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85780 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85781 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85782 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85783 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85784 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85785 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85786 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85787 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85788 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85789 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85790 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85791 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85792 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85793 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85794 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85795 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85796 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85797 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85798 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85799 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85800 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85801 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85802 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85803 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85804 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85805 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85806 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85807 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85808 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85809 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85810 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85811 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85812 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85813 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85814 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85815 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85816 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85817 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85818 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85819 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85820 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85821 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85822 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85823 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85824 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85825 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85826 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85827 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85828 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85829 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85830 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85831 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85832 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85833 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85834 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85835 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85836 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85837 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85838 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85839 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85840 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85841 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85842 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85843 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85844 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85845 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85846 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85847 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85848 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85849 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85850 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85851 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85852 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85853 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85854 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85855 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85856 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85857 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85858 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85859 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85860 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85861 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85862 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85863 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85864 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85865 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85866 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85867 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			85868 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85869 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85870 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85871 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85872 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85873 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85874 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85875 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85876 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85877 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85878 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85879 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85880 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85881 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85882 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85883 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85884 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85885 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85886 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85887 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85888 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85889 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85890 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85891 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85892 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85893 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85894 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85895 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85896 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85897 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85898 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85899 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85900 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85901 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85902 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85903 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85904 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			85905 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85906 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85907 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85908 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85909 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85910 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85911 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85912 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85913 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85914 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85915 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85916 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85917 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85918 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85919 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85920 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85921 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85922 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85923 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85924 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85925 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85926 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85927 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85928 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85929 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85930 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85931 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85932 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85933 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85934 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85935 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85936 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85937 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85938 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85939 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85940 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85941 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85942 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85943 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85944 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85945 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85946 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85947 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85948 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85949 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85950 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85951 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85952 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85953 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85954 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85955 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85956 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85957 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85958 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85959 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85960 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85961 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85962 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85963 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85964 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85965 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85966 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85967 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85968 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85969 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85970 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85971 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85972 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85973 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85974 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85975 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85976 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85977 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85978 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85979 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85980 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85981 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85982 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85983 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85984 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85985 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85986 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85987 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85988 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85989 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85990 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85991 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85992 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85993 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85994 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85995 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85996 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85997 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85998 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			85999 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
