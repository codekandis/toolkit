<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsBooleanValidator;
use CodeKandis\ToolKit\Validators\IsClassNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsClassNameValidator;
use CodeKandis\ToolKit\Validators\IsDateIntervalArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateIntervalStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateIntervalStringValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0003 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			3000 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3001 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3002 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3003 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3004 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3005 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3006 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3007 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3008 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3009 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3010 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3011 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3012 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3013 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3014 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3015 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3016 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3017 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3018 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3019 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3020 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3021 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3022 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3023 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3024 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3025 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3026 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3027 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3028 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3029 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3030 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3031 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3032 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3033 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3034 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3035 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3036 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3037 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3038 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3039 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3040 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3041 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3042 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3043 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3044 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3045 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3046 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3047 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3048 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3049 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3050 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3051 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3052 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3053 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3054 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3055 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3056 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3057 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3058 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3059 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3060 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3061 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3062 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3063 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3064 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3065 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3066 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3067 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3068 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3069 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3070 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3071 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3072 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3073 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3074 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3075 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3076 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3077 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3078 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3079 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3080 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3081 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3082 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3083 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3084 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3085 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3086 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3087 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3088 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3089 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3090 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3091 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3092 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3093 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3094 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3095 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3096 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3097 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3098 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3099 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3100 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3101 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3102 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3103 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3104 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3105 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3106 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3107 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3108 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3109 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3110 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3111 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3112 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3113 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3114 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3115 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3116 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3117 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3118 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3119 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3120 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3121 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3122 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3123 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3124 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3125 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3126 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3127 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3128 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3129 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3130 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3131 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3132 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3133 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3134 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3135 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3136 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3137 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3138 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3139 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3140 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3141 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3142 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3143 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3144 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3145 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3146 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3147 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3148 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3149 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3150 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3151 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3152 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3153 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3154 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3155 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3156 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3157 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3158 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3159 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3160 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3161 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3162 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3163 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3164 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3165 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3166 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3167 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3168 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3169 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3170 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3171 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3172 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3173 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3174 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3175 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3176 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3177 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3178 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3179 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3180 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3181 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3182 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3183 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3184 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3185 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3186 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3187 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3188 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3189 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3190 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3191 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3192 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3193 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3194 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3195 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3196 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3197 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3198 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3199 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3200 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3201 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3202 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3203 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3204 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3205 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3206 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3207 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3208 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3209 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3210 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3211 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3212 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3213 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3214 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3215 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3216 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3217 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3218 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3219 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3220 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3221 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3222 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3223 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3224 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3225 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3226 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3227 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3228 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3229 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3230 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3231 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3232 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3233 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3234 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3235 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3236 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3237 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3238 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3239 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3240 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3241 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3242 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3243 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3244 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3245 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			3246 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			3247 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			3248 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			3249 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3250 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3251 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3252 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3253 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			3254 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			3255 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			3256 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			3257 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3258 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3259 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3260 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3261 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3262 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3263 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3264 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3265 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3266 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3267 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3268 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3269 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3270 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3271 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3272 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3273 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3274 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3275 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3276 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3277 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3278 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3279 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3280 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3281 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3282 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3283 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3284 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3285 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3286 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3287 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3288 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3289 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3290 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3291 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3292 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3293 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3294 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3295 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3296 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3297 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3298 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3299 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3300 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3301 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3302 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3303 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3304 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3305 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3306 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3307 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3308 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3309 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3310 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3311 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3312 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3313 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3314 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3315 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3316 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3317 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3318 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3319 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3320 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3321 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3322 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3323 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3324 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3325 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3326 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3327 => [
				'validator'                => new IsClassNameArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3328 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3329 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3330 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3331 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3332 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3333 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3334 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3335 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3336 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3337 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3338 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3339 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3340 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3341 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3342 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3343 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3344 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3345 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3346 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3347 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3348 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3349 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3350 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3351 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3352 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3353 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3354 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3355 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3356 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3357 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3358 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3359 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3360 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3361 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3362 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3363 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3364 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3365 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3366 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3367 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3368 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3369 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3370 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3371 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3372 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3373 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3374 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3375 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3376 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3377 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3378 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3379 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3380 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3381 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3382 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3383 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3384 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3385 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3386 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3387 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3388 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3389 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3390 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3391 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3392 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3393 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3394 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3395 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3396 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3397 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3398 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3399 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3400 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3401 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3402 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3403 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3404 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3405 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3406 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3407 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3408 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3409 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3410 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3411 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3412 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3413 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3414 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3415 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3416 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3417 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3418 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3419 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3420 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3421 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3422 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3423 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3424 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3425 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3426 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3427 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3428 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3429 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3430 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3431 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3432 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3433 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3434 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3435 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3436 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3437 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3438 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3439 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3440 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3441 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3442 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3443 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3444 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3445 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3446 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3447 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3448 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3449 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3450 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3451 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			3452 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			3453 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3454 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3455 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3456 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3457 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3458 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3459 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			3460 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			3461 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3462 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3463 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3464 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3465 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3466 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3467 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3468 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3469 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3470 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3471 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3472 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3473 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3474 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3475 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3476 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3477 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3478 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3479 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3480 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3481 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3482 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3483 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3484 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3485 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3486 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3487 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3488 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3489 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3490 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3491 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3492 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3493 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3494 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3495 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3496 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3497 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3498 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3499 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3500 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3501 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3502 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3503 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3504 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3505 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3506 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3507 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3508 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3509 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3510 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3511 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3512 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3513 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3514 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3515 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3516 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3517 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3518 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3519 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3520 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3521 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3522 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3523 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3524 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3525 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3526 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3527 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3528 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3529 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3530 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3531 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3532 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3533 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3534 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3535 => [
				'validator'                => new IsClassNameValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3536 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3537 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3538 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3539 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3540 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3541 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3542 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3543 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3544 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3545 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3546 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3547 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3548 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3549 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3550 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3551 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3552 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3553 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3554 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3555 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3556 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3557 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3558 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3559 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3560 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3561 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3562 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3563 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3564 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3565 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3566 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3567 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3568 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3569 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3570 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3571 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3572 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3573 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3574 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3575 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3576 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3577 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3578 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3579 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3580 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3581 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3582 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3583 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3584 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3585 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3586 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3587 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3588 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3589 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3590 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3591 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3592 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3593 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3594 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3595 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3596 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3597 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3598 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3599 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3600 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3601 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3602 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3603 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3604 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3605 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3606 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3607 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3608 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3609 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3610 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3611 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3612 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3613 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3614 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3615 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3616 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3617 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3618 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3619 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3620 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3621 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3622 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3623 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3624 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3625 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3626 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3627 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3628 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3629 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3630 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3631 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3632 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3633 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3634 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3635 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3636 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3637 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3638 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3639 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3640 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3641 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3642 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3643 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3644 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3645 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3646 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3647 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3648 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3649 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3650 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3651 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3652 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3653 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3654 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3655 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3656 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3657 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3658 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3659 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3660 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3661 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3662 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3663 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3664 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3665 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3666 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3667 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3668 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3669 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3670 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3671 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3672 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3673 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3674 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3675 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3676 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3677 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3678 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3679 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3680 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3681 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3682 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3683 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3684 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3685 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3686 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3687 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3688 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3689 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3690 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3691 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3692 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3693 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3694 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3695 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3696 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3697 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3698 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3699 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3700 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3701 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3702 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3703 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3704 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3705 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3706 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3707 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3708 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3709 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3710 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3711 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3712 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3713 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3714 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3715 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3716 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3717 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3718 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3719 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3720 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3721 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			3722 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			3723 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			3724 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			3725 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3726 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3727 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3728 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3729 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3730 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3731 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3732 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3733 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3734 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3735 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3736 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3737 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3738 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3739 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3740 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3741 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3742 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3743 => [
				'validator'                => new IsDateIntervalArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3744 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3745 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3746 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3747 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3748 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3749 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3750 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3751 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3752 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3753 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3754 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3755 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3756 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3757 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3758 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3759 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3760 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3761 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3762 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3763 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3764 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3765 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3766 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3767 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3768 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3769 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3770 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3771 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3772 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3773 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3774 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3775 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3776 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3777 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3778 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3779 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3780 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3781 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3782 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3783 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3784 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3785 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3786 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3787 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3788 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3789 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3790 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3791 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3792 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3793 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3794 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3795 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3796 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3797 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3798 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3799 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3800 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3801 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3802 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3803 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3804 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3805 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3806 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3807 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3808 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3809 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3810 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3811 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3812 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3813 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3814 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3815 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3816 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3817 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3818 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3819 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			3820 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			3821 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			3822 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			3823 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3824 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3825 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3826 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3827 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3828 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3829 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3830 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3831 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3832 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3833 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3834 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3835 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3836 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3837 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3838 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3839 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3840 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3841 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3842 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3843 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3844 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3845 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3846 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3847 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3848 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3849 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3850 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3851 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3852 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3853 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3854 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3855 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3856 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3857 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3858 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3859 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3860 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3861 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3862 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3863 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3864 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3865 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3866 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3867 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3868 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3869 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3870 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3871 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3872 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3873 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3874 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3875 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3876 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3877 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3878 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3879 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3880 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3881 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3882 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3883 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3884 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3885 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3886 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3887 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3888 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3889 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3890 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3891 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3892 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3893 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3894 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3895 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3896 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3897 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3898 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3899 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3900 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3901 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3902 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3903 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3904 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3905 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3906 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3907 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3908 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3909 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3910 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3911 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3912 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3913 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3914 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3915 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3916 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3917 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3918 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3919 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3920 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3921 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3922 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3923 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3924 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3925 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3926 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3927 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3928 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3929 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3930 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3931 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3932 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3933 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3934 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3935 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3936 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3937 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3938 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3939 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3940 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3941 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3942 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3943 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3944 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3945 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3946 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3947 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3948 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3949 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3950 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3951 => [
				'validator'                => new IsDateIntervalStringArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3952 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3953 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3954 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3955 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3956 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3957 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3958 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3959 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3960 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3961 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3962 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3963 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3964 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3965 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3966 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3967 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3968 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3969 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3970 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3971 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3972 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3973 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3974 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3975 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3976 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3977 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3978 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3979 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3980 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3981 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3982 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3983 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3984 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3985 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3986 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3987 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3988 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3989 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3990 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3991 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3992 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3993 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3994 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3995 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3996 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3997 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3998 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			3999 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
