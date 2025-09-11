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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0076 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			76000 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76001 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76002 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76003 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76004 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76005 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			76006 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76007 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76008 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76009 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76010 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76011 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76012 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76013 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76014 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76015 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76016 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76017 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76018 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76019 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76020 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76021 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76022 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76023 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76024 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76025 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76026 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76027 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76028 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76029 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76030 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76031 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76032 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76033 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76034 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76035 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76036 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76037 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76038 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76039 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76040 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76041 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76042 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76043 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76044 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76045 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76046 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76047 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76048 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76049 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76050 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76051 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76052 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76053 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76054 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76055 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76056 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76057 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76058 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76059 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76060 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76061 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76062 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76063 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76064 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76065 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76066 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76067 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76068 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76069 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76070 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76071 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76072 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76073 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76074 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76075 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76076 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76077 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76078 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76079 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76080 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76081 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76082 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76083 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76084 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76085 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76086 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76087 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76088 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76089 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76090 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76091 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76092 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76093 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76094 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76095 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76096 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76097 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76098 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76099 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76100 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76101 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76102 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76103 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76104 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76105 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76106 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76107 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76108 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76109 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76110 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76111 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76112 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76113 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76114 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76115 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76116 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76117 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76118 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76119 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76120 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76121 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76122 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76123 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76124 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76125 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76126 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76127 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76128 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			76129 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76130 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76131 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76132 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76133 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76134 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76135 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76136 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76137 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76138 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76139 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76140 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76141 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76142 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76143 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76144 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76145 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76146 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76147 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76148 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76149 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76150 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76151 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76152 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76153 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76154 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76155 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76156 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76157 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76158 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76159 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76160 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76161 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76162 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76163 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76164 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76165 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76166 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76167 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76168 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76169 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76170 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76171 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76172 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76173 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76174 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76175 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76176 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76177 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76178 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76179 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76180 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76181 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76182 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76183 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76184 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76185 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76186 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76187 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76188 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76189 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76190 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76191 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76192 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76193 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76194 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76195 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76196 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76197 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76198 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76199 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76200 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76201 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76202 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76203 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76204 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76205 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76206 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76207 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76208 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76209 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76210 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76211 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76212 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76213 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76214 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			76215 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76216 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76217 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76218 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76219 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76220 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76221 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76222 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76223 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76224 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76225 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76226 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76227 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76228 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76229 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76230 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76231 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76232 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76233 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76234 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76235 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76236 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76237 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76238 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76239 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76240 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76241 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76242 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76243 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76244 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76245 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76246 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76247 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76248 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76249 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76250 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76251 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76252 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76253 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76254 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76255 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76256 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76257 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76258 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76259 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76260 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76261 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76262 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76263 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76264 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76265 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76266 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76267 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76268 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76269 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76270 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76271 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76272 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76273 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76274 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76275 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76276 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76277 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76278 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76279 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76280 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76281 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76282 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76283 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76284 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76285 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76286 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76287 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76288 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76289 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76290 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76291 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76292 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76293 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76294 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76295 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76296 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76297 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76298 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76299 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76300 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76301 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76302 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76303 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76304 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76305 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76306 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76307 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76308 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76309 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76310 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76311 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76312 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76313 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76314 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76315 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76316 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76317 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76318 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76319 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76320 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76321 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76322 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76323 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76324 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76325 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76326 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76327 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76328 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76329 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76330 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76331 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76332 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76333 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76334 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76335 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76336 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			76337 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76338 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76339 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76340 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76341 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76342 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76343 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76344 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76345 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76346 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76347 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76348 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76349 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76350 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76351 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76352 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76353 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76354 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76355 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76356 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76357 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76358 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76359 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76360 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76361 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76362 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76363 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76364 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76365 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76366 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76367 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76368 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76369 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76370 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76371 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76372 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76373 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76374 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76375 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76376 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76377 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76378 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76379 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76380 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76381 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76382 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76383 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76384 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76385 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76386 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76387 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76388 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76389 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76390 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76391 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76392 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76393 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76394 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76395 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76396 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76397 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76398 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76399 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76400 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76401 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76402 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76403 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76404 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76405 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76406 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76407 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76408 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76409 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76410 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76411 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76412 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76413 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76414 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76415 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76416 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76417 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76418 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76419 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76420 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76421 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			76422 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			76423 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76424 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76425 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76426 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76427 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76428 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76429 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76430 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76431 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76432 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76433 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76434 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76435 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76436 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76437 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76438 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76439 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76440 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76441 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76442 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76443 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76444 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76445 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76446 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76447 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76448 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76449 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76450 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76451 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76452 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76453 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76454 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76455 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76456 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76457 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76458 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76459 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76460 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76461 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76462 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76463 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76464 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76465 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76466 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76467 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76468 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76469 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76470 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76471 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76472 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76473 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76474 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76475 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76476 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76477 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76478 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76479 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76480 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76481 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76482 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76483 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76484 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76485 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76486 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76487 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76488 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76489 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76490 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76491 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76492 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76493 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76494 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76495 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76496 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76497 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76498 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76499 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76500 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76501 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76502 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76503 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76504 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76505 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76506 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76507 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76508 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76509 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76510 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76511 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76512 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76513 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76514 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76515 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76516 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76517 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76518 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76519 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76520 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76521 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76522 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76523 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76524 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76525 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76526 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76527 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76528 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76529 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76530 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76531 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76532 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76533 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76534 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76535 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76536 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76537 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76538 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76539 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76540 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76541 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76542 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76543 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76544 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			76545 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76546 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76547 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76548 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76549 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76550 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76551 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76552 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76553 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76554 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76555 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76556 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76557 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76558 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76559 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76560 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76561 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76562 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76563 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76564 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76565 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76566 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76567 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76568 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76569 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76570 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76571 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76572 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76573 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76574 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76575 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76576 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76577 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76578 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76579 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76580 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76581 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76582 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76583 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76584 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76585 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76586 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76587 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76588 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76589 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76590 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76591 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76592 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76593 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76594 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76595 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76596 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76597 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76598 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76599 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76600 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76601 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76602 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76603 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76604 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76605 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76606 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76607 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76608 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76609 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76610 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76611 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76612 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76613 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76614 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76615 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76616 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76617 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76618 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76619 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76620 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76621 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76622 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76623 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76624 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76625 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76626 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76627 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76628 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76629 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			76630 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			76631 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76632 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76633 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76634 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76635 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76636 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76637 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76638 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76639 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76640 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76641 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76642 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76643 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76644 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76645 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76646 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76647 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76648 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76649 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76650 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76651 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76652 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76653 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76654 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76655 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76656 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76657 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76658 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76659 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76660 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76661 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76662 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76663 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76664 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76665 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76666 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76667 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76668 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76669 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76670 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76671 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76672 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76673 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76674 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76675 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76676 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76677 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76678 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76679 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76680 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76681 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76682 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76683 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76684 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76685 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76686 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76687 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76688 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76689 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76690 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76691 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76692 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76693 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76694 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76695 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76696 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76697 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76698 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76699 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76700 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76701 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76702 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76703 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76704 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76705 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76706 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76707 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76708 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76709 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76710 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76711 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76712 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76713 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76714 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76715 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76716 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76717 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76718 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76719 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76720 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76721 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76722 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76723 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76724 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76725 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76726 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76727 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76728 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76729 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76730 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76731 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76732 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76733 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76734 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76735 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76736 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76737 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76738 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76739 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76740 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76741 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76742 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76743 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76744 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76745 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76746 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76747 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76748 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76749 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76750 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76751 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76752 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			76753 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76754 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76755 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76756 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76757 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76758 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76759 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76760 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76761 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76762 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76763 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76764 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76765 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76766 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76767 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76768 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76769 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76770 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76771 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76772 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76773 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76774 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76775 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76776 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76777 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76778 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76779 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76780 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76781 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76782 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76783 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76784 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76785 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76786 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76787 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76788 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76789 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76790 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76791 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76792 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76793 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76794 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76795 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76796 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76797 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76798 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76799 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76800 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76801 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76802 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76803 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76804 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76805 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76806 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76807 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76808 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76809 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76810 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76811 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76812 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76813 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76814 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76815 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76816 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76817 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76818 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76819 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76820 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76821 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76822 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76823 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76824 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76825 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76826 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76827 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76828 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76829 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76830 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76831 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76832 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76833 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76834 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76835 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76836 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76837 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76838 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76839 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76840 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76841 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76842 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76843 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			76844 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76845 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76846 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76847 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76848 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76849 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76850 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76851 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76852 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76853 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76854 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76855 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76856 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76857 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76858 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76859 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76860 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76861 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76862 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76863 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76864 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76865 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76866 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76867 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76868 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76869 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76870 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76871 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76872 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76873 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76874 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76875 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76876 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76877 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76878 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76879 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76880 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76881 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76882 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76883 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76884 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76885 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76886 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76887 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76888 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76889 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76890 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76891 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76892 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76893 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76894 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76895 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76896 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76897 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76898 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76899 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76900 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76901 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76902 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76903 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76904 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76905 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76906 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76907 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76908 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76909 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76910 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76911 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76912 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76913 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76914 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76915 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76916 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76917 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76918 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76919 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76920 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76921 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76922 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76923 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76924 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76925 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76926 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76927 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76928 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76929 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76930 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76931 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76932 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76933 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76934 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76935 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76936 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76937 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76938 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76939 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76940 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76941 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76942 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76943 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76944 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76945 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76946 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76947 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76948 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76949 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76950 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76951 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76952 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76953 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76954 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76955 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76956 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76957 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76958 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76959 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76960 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			76961 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76962 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76963 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76964 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76965 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76966 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76967 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76968 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76969 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76970 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76971 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76972 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76973 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76974 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76975 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76976 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76977 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76978 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76979 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76980 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76981 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76982 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76983 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76984 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76985 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76986 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76987 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76988 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76989 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76990 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76991 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76992 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76993 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76994 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76995 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76996 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76997 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76998 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			76999 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
