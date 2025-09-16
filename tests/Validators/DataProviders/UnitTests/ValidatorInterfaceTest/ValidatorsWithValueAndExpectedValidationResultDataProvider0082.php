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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0082 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			82000 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82001 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82002 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82003 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82004 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82005 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82006 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82007 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82008 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82009 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82010 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82011 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82012 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82013 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82014 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82015 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82016 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82017 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82018 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82019 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82020 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82021 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82022 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82023 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82024 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82025 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82026 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82027 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82028 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82029 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82030 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82031 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82032 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82033 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82034 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82035 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82036 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82037 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82038 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82039 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82040 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82041 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82042 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82043 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82044 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82045 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82046 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82047 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82048 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82049 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82050 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82051 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82052 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82053 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82054 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82055 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82056 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82057 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82058 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82059 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82060 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82061 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82062 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82063 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82064 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82065 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82066 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82067 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82068 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82069 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82070 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82071 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82072 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82073 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82074 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82075 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82076 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82077 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82078 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82079 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82080 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82081 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82082 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82083 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82084 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82085 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82086 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82087 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82088 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82089 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82090 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82091 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82092 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82093 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82094 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82095 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82096 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82097 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82098 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82099 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82100 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82101 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82102 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82103 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82104 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82105 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82106 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82107 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82108 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82109 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82110 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82111 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82112 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82113 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82114 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82115 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82116 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82117 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82118 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82119 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82120 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82121 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82122 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82123 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82124 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82125 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82126 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82127 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82128 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82129 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82130 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82131 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82132 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82133 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82134 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82135 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82136 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82137 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82138 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82139 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82140 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82141 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82142 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82143 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82144 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82145 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82146 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82147 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82148 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82149 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82150 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82151 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82152 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82153 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82154 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82155 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82156 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82157 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82158 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82159 => [
				'validator'                => new NullableIsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82160 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82161 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82162 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82163 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82164 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82165 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82166 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82167 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82168 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82169 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82170 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82171 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82172 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82173 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82174 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82175 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82176 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82177 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82178 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82179 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82180 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82181 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82182 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82183 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82184 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82185 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82186 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82187 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82188 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82189 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82190 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82191 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82192 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82193 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82194 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82195 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82196 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82197 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82198 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82199 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82200 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82201 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82202 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82203 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82204 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82205 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82206 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82207 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82208 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82209 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82210 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82211 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82212 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82213 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82214 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82215 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82216 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82217 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82218 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82219 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82220 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82221 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82222 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82223 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82224 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82225 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82226 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82227 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82228 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82229 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82230 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82231 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82232 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82233 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82234 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82235 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82236 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82237 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82238 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82239 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82240 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82241 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82242 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82243 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82244 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82245 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82246 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82247 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82248 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82249 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82250 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82251 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82252 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82253 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82254 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82255 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82256 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82257 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82258 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82259 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82260 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82261 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82262 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82263 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82264 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82265 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82266 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82267 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82268 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82269 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82270 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82271 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82272 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82273 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82274 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82275 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82276 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82277 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82278 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82279 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82280 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82281 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82282 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82283 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82284 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82285 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82286 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82287 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82288 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82289 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82290 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82291 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82292 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82293 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82294 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82295 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82296 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82297 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82298 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82299 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82300 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82301 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82302 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82303 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82304 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82305 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82306 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82307 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82308 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82309 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82310 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82311 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82312 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82313 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82314 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82315 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82316 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82317 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82318 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82319 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82320 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82321 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82322 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82323 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82324 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82325 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82326 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82327 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82328 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82329 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82330 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82331 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82332 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82333 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82334 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82335 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82336 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82337 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82338 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82339 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82340 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82341 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82342 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82343 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82344 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82345 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82346 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82347 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82348 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82349 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82350 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82351 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82352 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82353 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82354 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82355 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82356 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82357 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82358 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82359 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82360 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82361 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82362 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82363 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82364 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82365 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82366 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82367 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82368 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82369 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82370 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82371 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82372 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82373 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82374 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82375 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82376 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82377 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82378 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82379 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82380 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82381 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82382 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82383 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82384 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82385 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82386 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82387 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82388 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82389 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82390 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82391 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82392 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82393 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82394 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82395 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82396 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82397 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82398 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82399 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82400 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82401 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82402 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82403 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82404 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82405 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82406 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82407 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82408 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82409 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82410 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82411 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82412 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82413 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82414 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82415 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82416 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82417 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82418 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82419 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82420 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82421 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82422 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82423 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82424 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82425 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82426 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82427 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82428 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82429 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82430 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82431 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82432 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82433 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82434 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82435 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82436 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82437 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82438 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82439 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82440 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82441 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82442 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82443 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82444 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82445 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82446 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82447 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82448 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82449 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82450 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82451 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82452 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82453 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82454 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82455 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82456 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82457 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82458 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82459 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82460 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82461 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82462 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82463 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82464 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82465 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82466 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82467 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82468 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82469 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82470 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82471 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82472 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82473 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82474 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82475 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82476 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82477 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82478 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82479 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82480 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82481 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82482 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82483 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82484 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82485 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82486 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82487 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82488 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82489 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82490 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82491 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82492 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82493 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82494 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82495 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82496 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82497 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82498 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82499 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82500 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82501 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82502 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82503 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82504 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82505 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82506 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82507 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82508 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82509 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82510 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82511 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82512 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82513 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82514 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82515 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82516 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82517 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82518 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82519 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82520 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82521 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82522 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82523 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82524 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82525 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82526 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82527 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82528 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82529 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82530 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82531 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82532 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82533 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82534 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82535 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82536 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82537 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82538 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82539 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82540 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82541 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82542 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82543 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82544 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82545 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82546 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82547 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82548 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82549 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82550 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82551 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82552 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82553 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82554 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82555 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82556 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82557 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82558 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82559 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82560 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82561 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82562 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82563 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82564 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82565 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82566 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82567 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82568 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82569 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82570 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82571 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82572 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82573 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82574 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82575 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82576 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82577 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82578 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82579 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82580 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82581 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82582 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82583 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82584 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82585 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82586 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82587 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82588 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82589 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82590 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82591 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82592 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82593 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82594 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82595 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82596 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82597 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82598 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82599 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82600 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82601 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82602 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82603 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82604 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82605 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82606 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82607 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82608 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82609 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82610 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82611 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82612 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82613 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82614 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82615 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82616 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82617 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82618 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82619 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82620 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82621 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82622 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82623 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82624 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82625 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82626 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82627 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82628 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82629 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82630 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82631 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82632 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82633 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82634 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82635 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82636 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82637 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82638 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82639 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82640 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82641 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82642 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82643 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82644 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82645 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82646 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82647 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82648 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82649 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82650 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82651 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82652 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82653 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82654 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82655 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82656 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82657 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82658 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82659 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82660 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82661 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82662 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82663 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82664 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82665 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82666 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82667 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82668 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82669 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82670 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82671 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82672 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82673 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82674 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82675 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82676 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82677 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82678 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82679 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82680 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82681 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82682 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82683 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82684 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82685 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82686 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82687 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82688 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82689 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82690 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82691 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82692 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82693 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82694 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82695 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82696 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82697 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82698 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82699 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82700 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82701 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82702 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82703 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82704 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82705 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82706 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82707 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82708 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82709 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82710 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82711 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82712 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82713 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82714 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82715 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82716 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82717 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82718 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82719 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82720 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82721 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82722 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82723 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82724 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82725 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82726 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82727 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82728 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82729 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82730 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82731 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82732 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82733 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82734 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82735 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82736 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82737 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82738 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82739 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82740 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82741 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82742 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82743 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82744 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82745 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82746 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82747 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82748 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82749 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82750 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82751 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82752 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82753 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82754 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82755 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82756 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82757 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82758 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82759 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82760 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82761 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82762 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82763 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82764 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82765 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82766 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82767 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82768 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82769 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82770 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82771 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82772 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82773 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82774 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82775 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82776 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82777 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82778 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82779 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82780 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82781 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82782 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82783 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82784 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82785 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82786 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82787 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82788 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82789 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82790 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82791 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82792 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82793 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82794 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82795 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82796 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82797 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82798 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82799 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82800 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82801 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82802 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82803 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82804 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82805 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82806 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82807 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82808 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82809 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82810 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82811 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82812 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82813 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82814 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82815 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82816 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82817 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82818 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82819 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82820 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82821 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82822 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82823 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82824 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82825 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82826 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82827 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82828 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82829 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82830 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82831 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82832 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82833 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82834 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82835 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82836 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82837 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82838 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82839 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82840 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82841 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82842 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82843 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82844 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82845 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82846 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82847 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82848 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82849 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82850 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82851 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82852 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82853 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82854 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82855 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82856 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82857 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82858 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82859 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82860 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82861 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82862 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82863 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82864 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82865 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82866 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82867 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82868 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82869 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82870 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82871 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82872 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82873 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82874 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82875 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82876 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82877 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82878 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82879 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82880 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82881 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82882 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82883 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82884 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82885 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82886 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82887 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82888 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82889 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82890 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82891 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82892 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82893 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82894 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82895 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82896 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82897 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82898 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82899 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82900 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82901 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82902 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82903 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82904 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82905 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82906 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82907 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82908 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82909 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82910 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82911 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82912 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82913 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82914 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82915 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82916 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82917 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82918 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82919 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82920 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82921 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82922 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82923 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82924 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82925 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82926 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82927 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82928 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82929 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82930 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82931 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82932 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82933 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82934 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82935 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82936 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82937 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82938 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82939 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82940 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82941 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82942 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82943 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82944 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82945 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82946 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82947 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82948 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82949 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82950 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82951 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82952 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82953 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82954 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82955 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82956 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82957 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82958 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82959 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82960 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82961 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82962 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82963 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82964 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82965 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82966 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82967 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82968 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82969 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82970 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82971 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82972 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82973 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82974 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82975 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82976 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82977 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82978 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82979 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82980 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82981 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82982 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82983 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82984 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82985 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82986 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82987 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82988 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82989 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82990 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82991 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82992 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			82993 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82994 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82995 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82996 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82997 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82998 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			82999 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
