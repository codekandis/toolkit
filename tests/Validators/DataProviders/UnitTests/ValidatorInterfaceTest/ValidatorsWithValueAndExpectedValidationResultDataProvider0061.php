<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeImmutableArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeImmutableValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringArrayByFormatValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringArrayValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0061 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			61000 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61001 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61002 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61003 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61004 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61005 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61006 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61007 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61008 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61009 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61010 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61011 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61012 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61013 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61014 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61015 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61016 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61017 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61018 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61019 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61020 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61021 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61022 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61023 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61024 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61025 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61026 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61027 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61028 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61029 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61030 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61031 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61032 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61033 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61034 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61035 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61036 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61037 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61038 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61039 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61040 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61041 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61042 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61043 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61044 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61045 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61046 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61047 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61048 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61049 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61050 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61051 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61052 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61053 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61054 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61055 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61056 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61057 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61058 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61059 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61060 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61061 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61062 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61063 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61064 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61065 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61066 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61067 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61068 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61069 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61070 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61071 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61072 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61073 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61074 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61075 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61076 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61077 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61078 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61079 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61080 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61081 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61082 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61083 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61084 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61085 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61086 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61087 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61088 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61089 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61090 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61091 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61092 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61093 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61094 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61095 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61096 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61097 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61098 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61099 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61100 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61101 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61102 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61103 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61104 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61105 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61106 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61107 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61108 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61109 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61110 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61111 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61112 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61113 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61114 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61115 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61116 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61117 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			61118 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			61119 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			61120 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			61121 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61122 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61123 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61124 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61125 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61126 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61127 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61128 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61129 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61130 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61131 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61132 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61133 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61134 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61135 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61136 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61137 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61138 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61139 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61140 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61141 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61142 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61143 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61144 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61145 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61146 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61147 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61148 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61149 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61150 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61151 => [
				'validator'                => new NullableIsDateTimeArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61152 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			61153 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61154 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61155 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61156 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61157 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61158 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61159 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61160 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61161 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61162 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61163 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61164 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61165 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61166 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61167 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61168 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61169 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61170 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61171 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61172 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61173 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61174 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61175 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61176 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61177 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61178 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61179 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61180 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61181 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61182 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61183 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61184 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61185 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61186 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61187 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61188 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61189 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61190 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61191 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61192 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61193 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61194 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61195 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61196 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61197 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61198 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61199 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61200 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61201 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61202 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61203 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61204 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61205 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61206 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61207 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61208 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61209 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61210 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61211 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61212 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61213 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61214 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61215 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61216 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61217 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61218 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61219 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61220 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61221 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61222 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61223 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61224 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61225 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61226 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61227 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61228 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61229 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61230 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61231 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61232 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61233 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61234 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61235 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61236 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61237 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61238 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61239 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61240 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61241 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61242 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61243 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61244 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61245 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61246 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61247 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61248 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61249 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61250 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61251 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61252 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61253 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61254 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61255 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61256 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61257 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61258 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61259 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61260 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61261 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61262 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61263 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61264 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61265 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61266 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61267 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61268 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61269 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61270 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61271 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61272 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61273 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61274 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61275 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61276 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61277 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61278 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61279 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61280 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61281 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61282 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61283 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61284 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61285 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61286 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61287 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61288 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61289 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61290 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61291 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61292 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61293 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61294 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61295 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61296 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61297 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61298 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61299 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61300 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61301 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61302 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61303 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61304 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61305 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61306 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61307 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61308 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61309 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61310 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61311 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61312 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61313 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61314 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61315 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61316 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61317 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61318 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61319 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			61320 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			61321 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			61322 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			61323 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61324 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61325 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61326 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61327 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61328 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61329 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61330 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61331 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61332 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61333 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61334 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61335 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61336 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61337 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61338 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61339 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61340 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61341 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61342 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61343 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61344 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61345 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61346 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61347 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61348 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61349 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61350 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61351 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61352 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61353 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61354 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61355 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61356 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61357 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61358 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61359 => [
				'validator'                => new NullableIsDateTimeImmutableArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61360 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			61361 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61362 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61363 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61364 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61365 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61366 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61367 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61368 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61369 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61370 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61371 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61372 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61373 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61374 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61375 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61376 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61377 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61378 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61379 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61380 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61381 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61382 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61383 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61384 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61385 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61386 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61387 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61388 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61389 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61390 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61391 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61392 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61393 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61394 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61395 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61396 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61397 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61398 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61399 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61400 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61401 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61402 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61403 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61404 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61405 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61406 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61407 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61408 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61409 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61410 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61411 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61412 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61413 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61414 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61415 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61416 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61417 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61418 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61419 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61420 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61421 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61422 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61423 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61424 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61425 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61426 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61427 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61428 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61429 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61430 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61431 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61432 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61433 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61434 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61435 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61436 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61437 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61438 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61439 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61440 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61441 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61442 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61443 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61444 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61445 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61446 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61447 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61448 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61449 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61450 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61451 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61452 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61453 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61454 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61455 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61456 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61457 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61458 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61459 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61460 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61461 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61462 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61463 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61464 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61465 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61466 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61467 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61468 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61469 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61470 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61471 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61472 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61473 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61474 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61475 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61476 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61477 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61478 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61479 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61480 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61481 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61482 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61483 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61484 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61485 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61486 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61487 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61488 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61489 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61490 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61491 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61492 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61493 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61494 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61495 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61496 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61497 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61498 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61499 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61500 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61501 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61502 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61503 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61504 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61505 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61506 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61507 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61508 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61509 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61510 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61511 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61512 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61513 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61514 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61515 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61516 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61517 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61518 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61519 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61520 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61521 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61522 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61523 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61524 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61525 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			61526 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			61527 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61528 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61529 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61530 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61531 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61532 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61533 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61534 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61535 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61536 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61537 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61538 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61539 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61540 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61541 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61542 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61543 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61544 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61545 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61546 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61547 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61548 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61549 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61550 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61551 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61552 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61553 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61554 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61555 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61556 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61557 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61558 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61559 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61560 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61561 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61562 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61563 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61564 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61565 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61566 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61567 => [
				'validator'                => new NullableIsDateTimeImmutableValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61568 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			61569 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61570 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61571 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61572 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61573 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61574 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61575 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61576 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61577 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61578 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61579 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61580 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61581 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61582 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61583 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61584 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61585 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61586 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61587 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61588 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61589 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61590 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61591 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61592 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61593 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61594 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61595 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61596 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61597 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61598 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61599 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61600 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61601 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61602 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61603 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61604 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61605 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61606 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61607 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61608 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61609 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61610 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61611 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61612 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61613 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61614 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61615 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61616 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61617 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61618 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61619 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61620 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61621 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61622 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61623 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61624 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61625 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61626 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61627 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61628 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61629 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			61630 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61631 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61632 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61633 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61634 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61635 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61636 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61637 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61638 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61639 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61640 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61641 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61642 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61643 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61644 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61645 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61646 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61647 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61648 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61649 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61650 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61651 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61652 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61653 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61654 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61655 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61656 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61657 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61658 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61659 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61660 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61661 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61662 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61663 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61664 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61665 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61666 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61667 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61668 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61669 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61670 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61671 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61672 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61673 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61674 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61675 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61676 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61677 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61678 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61679 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61680 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61681 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61682 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61683 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61684 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61685 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61686 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61687 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61688 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61689 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61690 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61691 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61692 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61693 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61694 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61695 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61696 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61697 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61698 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61699 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61700 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61701 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61702 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61703 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61704 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61705 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61706 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61707 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61708 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61709 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61710 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61711 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61712 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61713 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61714 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61715 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61716 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61717 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61718 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61719 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61720 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61721 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61722 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61723 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61724 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61725 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61726 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61727 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61728 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61729 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61730 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61731 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61732 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61733 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61734 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61735 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61736 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61737 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61738 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61739 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61740 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61741 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61742 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61743 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61744 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61745 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61746 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61747 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61748 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61749 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61750 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61751 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61752 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61753 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61754 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61755 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61756 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61757 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61758 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61759 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61760 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61761 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61762 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61763 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61764 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61765 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61766 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61767 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61768 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61769 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61770 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61771 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61772 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61773 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61774 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61775 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61776 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			61777 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61778 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61779 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61780 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61781 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61782 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61783 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61784 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61785 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61786 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61787 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61788 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61789 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61790 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61791 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61792 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61793 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61794 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61795 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61796 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61797 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61798 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61799 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61800 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61801 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61802 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61803 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61804 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61805 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61806 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61807 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61808 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61809 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61810 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61811 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61812 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61813 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61814 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61815 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61816 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61817 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61818 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61819 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61820 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61821 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61822 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61823 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61824 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61825 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61826 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61827 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61828 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61829 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61830 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61831 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61832 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61833 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61834 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61835 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61836 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61837 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61838 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			61839 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61840 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61841 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61842 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61843 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61844 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61845 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61846 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61847 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61848 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61849 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61850 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61851 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61852 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61853 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61854 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61855 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61856 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61857 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61858 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61859 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61860 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61861 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61862 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61863 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61864 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61865 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61866 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61867 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61868 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61869 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61870 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61871 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61872 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61873 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61874 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61875 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61876 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61877 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61878 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61879 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61880 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61881 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61882 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61883 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61884 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61885 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61886 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61887 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61888 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61889 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61890 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61891 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61892 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61893 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61894 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61895 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61896 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61897 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61898 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61899 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61900 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61901 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61902 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61903 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61904 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61905 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61906 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61907 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61908 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61909 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61910 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61911 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61912 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61913 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61914 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61915 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61916 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61917 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61918 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61919 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61920 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61921 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61922 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61923 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61924 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61925 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61926 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61927 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61928 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61929 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61930 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61931 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61932 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61933 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61934 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61935 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61936 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61937 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61938 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61939 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61940 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61941 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61942 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61943 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61944 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61945 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61946 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61947 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61948 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61949 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61950 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61951 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61952 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61953 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61954 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61955 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61956 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61957 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61958 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61959 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61960 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61961 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61962 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61963 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61964 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61965 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61966 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61967 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61968 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61969 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61970 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61971 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61972 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61973 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61974 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61975 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61976 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61977 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61978 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61979 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61980 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61981 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61982 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61983 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61984 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			61985 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61986 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61987 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61988 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61989 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61990 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61991 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61992 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61993 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61994 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61995 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61996 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61997 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61998 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			61999 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
