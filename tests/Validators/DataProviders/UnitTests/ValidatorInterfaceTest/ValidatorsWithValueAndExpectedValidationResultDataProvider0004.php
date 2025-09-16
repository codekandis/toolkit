<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsDateIntervalStringValidator;
use CodeKandis\ToolKit\Validators\IsDateIntervalValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeImmutableArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeImmutableValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringArrayByFormatValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0004 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			4000 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4001 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4002 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4003 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4004 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4005 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4006 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4007 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4008 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4009 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4010 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4011 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4012 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4013 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4014 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4015 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4016 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4017 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4018 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4019 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4020 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4021 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4022 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4023 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4024 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4025 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			4026 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			4027 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4028 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4029 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4030 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4031 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4032 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4033 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4034 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4035 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4036 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4037 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4038 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4039 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4040 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4041 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4042 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4043 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4044 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4045 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4046 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4047 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4048 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4049 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4050 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4051 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4052 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4053 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4054 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4055 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4056 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4057 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4058 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4059 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4060 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4061 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4062 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4063 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4064 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4065 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4066 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4067 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4068 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4069 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4070 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4071 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4072 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4073 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4074 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4075 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4076 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4077 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4078 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4079 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4080 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4081 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4082 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4083 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4084 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4085 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4086 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4087 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4088 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4089 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4090 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4091 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4092 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4093 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4094 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4095 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4096 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4097 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4098 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4099 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4100 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4101 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4102 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4103 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4104 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4105 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4106 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4107 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4108 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4109 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4110 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4111 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4112 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4113 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4114 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4115 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4116 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4117 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4118 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4119 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4120 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4121 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4122 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4123 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4124 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4125 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4126 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4127 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4128 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4129 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4130 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4131 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4132 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4133 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4134 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4135 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4136 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4137 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4138 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4139 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4140 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4141 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4142 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4143 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4144 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4145 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4146 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4147 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4148 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4149 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4150 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4151 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4152 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4153 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4154 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4155 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4156 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4157 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4158 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4159 => [
				'validator'                => new IsDateIntervalStringValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4160 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4161 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4162 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4163 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4164 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4165 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4166 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4167 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4168 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4169 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4170 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4171 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4172 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4173 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4174 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4175 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4176 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4177 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4178 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4179 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4180 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4181 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4182 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4183 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4184 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4185 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4186 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4187 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4188 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4189 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4190 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4191 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4192 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4193 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4194 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4195 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4196 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4197 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4198 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4199 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4200 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4201 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4202 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4203 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4204 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4205 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4206 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4207 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4208 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4209 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4210 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4211 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4212 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4213 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4214 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4215 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4216 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4217 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4218 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4219 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4220 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4221 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4222 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4223 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4224 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4225 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4226 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4227 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4228 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4229 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4230 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4231 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4232 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4233 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4234 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4235 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4236 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4237 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4238 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4239 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4240 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4241 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4242 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4243 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4244 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4245 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4246 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4247 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4248 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4249 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4250 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4251 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4252 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4253 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4254 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4255 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4256 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4257 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4258 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4259 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4260 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4261 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4262 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4263 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4264 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4265 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4266 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4267 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4268 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4269 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4270 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4271 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4272 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4273 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4274 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4275 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4276 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4277 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4278 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4279 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4280 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4281 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4282 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4283 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4284 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4285 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4286 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4287 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4288 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4289 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4290 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4291 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4292 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4293 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4294 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4295 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4296 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4297 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4298 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4299 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4300 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4301 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4302 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4303 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4304 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4305 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4306 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4307 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4308 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4309 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4310 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4311 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4312 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4313 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4314 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4315 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4316 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4317 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4318 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4319 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4320 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4321 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4322 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4323 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4324 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4325 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4326 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4327 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4328 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4329 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4330 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4331 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4332 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4333 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4334 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4335 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4336 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4337 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4338 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4339 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4340 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4341 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4342 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4343 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			4344 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			4345 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4346 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4347 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4348 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4349 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4350 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4351 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4352 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4353 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4354 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4355 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4356 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4357 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4358 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4359 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4360 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4361 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4362 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4363 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4364 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4365 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4366 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4367 => [
				'validator'                => new IsDateIntervalValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4368 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4369 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4370 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4371 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4372 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4373 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4374 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4375 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4376 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4377 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4378 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4379 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4380 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4381 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4382 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4383 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4384 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4385 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4386 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4387 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4388 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4389 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4390 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4391 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4392 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4393 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4394 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4395 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4396 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4397 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4398 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4399 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4400 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4401 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4402 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4403 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4404 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4405 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4406 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4407 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4408 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4409 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4410 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4411 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4412 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4413 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4414 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4415 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4416 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4417 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4418 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4419 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4420 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4421 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4422 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4423 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4424 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4425 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4426 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4427 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4428 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4429 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4430 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4431 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4432 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4433 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4434 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4435 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4436 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4437 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4438 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4439 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4440 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4441 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4442 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4443 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4444 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4445 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4446 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4447 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4448 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4449 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4450 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4451 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4452 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4453 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4454 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4455 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4456 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4457 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4458 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4459 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4460 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4461 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4462 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4463 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4464 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4465 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4466 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4467 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4468 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4469 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4470 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4471 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4472 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4473 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4474 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4475 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4476 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4477 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4478 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4479 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4480 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4481 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4482 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4483 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4484 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4485 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4486 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4487 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4488 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4489 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4490 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4491 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4492 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4493 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4494 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4495 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4496 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4497 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4498 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4499 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4500 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4501 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4502 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4503 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4504 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4505 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4506 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4507 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4508 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4509 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4510 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4511 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4512 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4513 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4514 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4515 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4516 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4517 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4518 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4519 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4520 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4521 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4522 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4523 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4524 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4525 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4526 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4527 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4528 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4529 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4530 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4531 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4532 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4533 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4534 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4535 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4536 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4537 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4538 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4539 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4540 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4541 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			4542 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			4543 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			4544 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			4545 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4546 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4547 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4548 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4549 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4550 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4551 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4552 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4553 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4554 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4555 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4556 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4557 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4558 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4559 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4560 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4561 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4562 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4563 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4564 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4565 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4566 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4567 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4568 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4569 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4570 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4571 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4572 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4573 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4574 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4575 => [
				'validator'                => new IsDateTimeArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4576 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4577 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4578 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4579 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4580 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4581 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4582 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4583 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4584 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4585 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4586 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4587 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4588 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4589 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4590 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4591 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4592 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4593 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4594 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4595 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4596 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4597 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4598 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4599 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4600 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4601 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4602 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4603 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4604 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4605 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4606 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4607 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4608 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4609 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4610 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4611 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4612 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4613 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4614 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4615 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4616 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4617 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4618 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4619 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4620 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4621 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4622 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4623 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4624 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4625 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4626 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4627 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4628 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4629 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4630 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4631 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4632 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4633 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4634 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4635 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4636 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4637 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4638 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4639 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4640 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4641 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4642 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4643 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4644 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4645 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4646 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4647 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4648 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4649 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4650 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4651 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4652 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4653 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4654 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4655 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4656 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4657 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4658 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4659 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4660 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4661 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4662 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4663 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4664 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4665 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4666 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4667 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4668 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4669 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4670 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4671 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4672 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4673 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4674 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4675 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4676 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4677 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4678 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4679 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4680 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4681 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4682 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4683 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4684 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4685 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4686 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4687 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4688 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4689 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4690 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4691 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4692 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4693 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4694 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4695 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4696 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4697 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4698 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4699 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4700 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4701 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4702 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4703 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4704 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4705 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4706 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4707 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4708 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4709 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4710 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4711 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4712 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4713 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4714 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4715 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4716 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4717 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4718 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4719 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4720 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4721 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4722 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4723 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4724 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4725 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4726 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4727 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4728 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4729 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4730 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4731 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4732 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4733 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4734 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4735 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4736 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4737 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4738 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4739 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4740 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4741 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4742 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4743 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			4744 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			4745 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			4746 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			4747 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4748 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4749 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4750 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4751 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4752 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4753 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4754 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4755 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4756 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4757 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4758 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4759 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4760 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4761 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4762 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4763 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4764 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4765 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4766 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4767 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4768 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4769 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4770 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4771 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4772 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4773 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4774 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4775 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4776 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4777 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4778 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4779 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4780 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4781 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4782 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4783 => [
				'validator'                => new IsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4784 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4785 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4786 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4787 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4788 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4789 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4790 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4791 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4792 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4793 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4794 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4795 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4796 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4797 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4798 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4799 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4800 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4801 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4802 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4803 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4804 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4805 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4806 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4807 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4808 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4809 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4810 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4811 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4812 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4813 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4814 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4815 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4816 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4817 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4818 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4819 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4820 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4821 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4822 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4823 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4824 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4825 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4826 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4827 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4828 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4829 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4830 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4831 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4832 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4833 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4834 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4835 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4836 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4837 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4838 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4839 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4840 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4841 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4842 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4843 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4844 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4845 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4846 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4847 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4848 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4849 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4850 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4851 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4852 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4853 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4854 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4855 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4856 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4857 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4858 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4859 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4860 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4861 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4862 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4863 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4864 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4865 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4866 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4867 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4868 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4869 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4870 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4871 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4872 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4873 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4874 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4875 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4876 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4877 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4878 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4879 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4880 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4881 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4882 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4883 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4884 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4885 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4886 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4887 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4888 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4889 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4890 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4891 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4892 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4893 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4894 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4895 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4896 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4897 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4898 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4899 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4900 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4901 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4902 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4903 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4904 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4905 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4906 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4907 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4908 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4909 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4910 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4911 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4912 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4913 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4914 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4915 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4916 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4917 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4918 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4919 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4920 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4921 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4922 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4923 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4924 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4925 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4926 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4927 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4928 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4929 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4930 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4931 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4932 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4933 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4934 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4935 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4936 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4937 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4938 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4939 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4940 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4941 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4942 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4943 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4944 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4945 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4946 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4947 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4948 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4949 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			4950 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			4951 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4952 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4953 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4954 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4955 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4956 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4957 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4958 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4959 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4960 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4961 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4962 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4963 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4964 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4965 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4966 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4967 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4968 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4969 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4970 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4971 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4972 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4973 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4974 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4975 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4976 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4977 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4978 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4979 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4980 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4981 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4982 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4983 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4984 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4985 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4986 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4987 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4988 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4989 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4990 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4991 => [
				'validator'                => new IsDateTimeImmutableValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4992 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4993 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4994 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4995 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4996 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4997 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4998 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			4999 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
