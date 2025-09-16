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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0067 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			67000 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67001 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67002 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67003 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67004 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67005 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67006 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67007 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67008 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67009 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67010 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67011 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67012 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67013 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67014 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67015 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67016 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67017 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67018 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67019 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67020 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67021 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67022 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67023 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67024 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67025 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67026 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67027 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67028 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67029 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67030 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67031 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67032 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67033 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67034 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67035 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67036 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67037 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67038 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67039 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67040 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67041 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67042 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67043 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67044 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67045 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67046 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67047 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67048 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67049 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67050 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67051 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67052 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67053 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67054 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67055 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67056 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67057 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67058 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67059 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67060 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67061 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67062 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67063 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67064 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67065 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67066 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67067 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67068 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67069 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67070 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67071 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67072 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67073 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67074 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67075 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67076 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67077 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67078 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67079 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67080 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67081 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67082 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67083 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67084 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67085 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67086 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67087 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67088 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67089 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67090 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67091 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67092 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67093 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67094 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67095 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67096 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67097 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67098 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67099 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67100 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67101 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67102 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67103 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67104 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67105 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67106 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67107 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67108 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67109 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67110 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67111 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67112 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67113 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67114 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67115 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67116 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67117 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67118 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67119 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67120 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67121 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67122 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67123 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67124 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67125 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67126 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67127 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67128 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67129 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67130 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67131 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67132 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67133 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67134 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67135 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67136 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67137 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67138 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67139 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67140 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67141 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67142 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67143 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67144 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67145 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67146 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67147 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67148 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67149 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67150 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67151 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67152 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67153 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67154 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67155 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67156 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67157 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67158 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67159 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67160 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67161 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67162 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67163 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67164 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67165 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67166 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67167 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67168 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67169 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67170 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67171 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67172 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67173 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67174 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67175 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67176 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67177 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67178 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67179 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67180 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67181 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67182 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67183 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67184 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			67185 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67186 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67187 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67188 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67189 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67190 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67191 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67192 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67193 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67194 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67195 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67196 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67197 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67198 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67199 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67200 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67201 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			67202 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			67203 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67204 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67205 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67206 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67207 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67208 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67209 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67210 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67211 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67212 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67213 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67214 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67215 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67216 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67217 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67218 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67219 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67220 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67221 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67222 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67223 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67224 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67225 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67226 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67227 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67228 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67229 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67230 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67231 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67232 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67233 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67234 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67235 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67236 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67237 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67238 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67239 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67240 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67241 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67242 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67243 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67244 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67245 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67246 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67247 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67248 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67249 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67250 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67251 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67252 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67253 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67254 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67255 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67256 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67257 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67258 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67259 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67260 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67261 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67262 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67263 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67264 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67265 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67266 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67267 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67268 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67269 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67270 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67271 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67272 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67273 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67274 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67275 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67276 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67277 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67278 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67279 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67280 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67281 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67282 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67283 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67284 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67285 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67286 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67287 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67288 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67289 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67290 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67291 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67292 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67293 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67294 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67295 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67296 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67297 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67298 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67299 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67300 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67301 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67302 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67303 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67304 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67305 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67306 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67307 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67308 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67309 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67310 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67311 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67312 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67313 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67314 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67315 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67316 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67317 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67318 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67319 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67320 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67321 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67322 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67323 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67324 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67325 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67326 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67327 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67328 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67329 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67330 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67331 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67332 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67333 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67334 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67335 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67336 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67337 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67338 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67339 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67340 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67341 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67342 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67343 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67344 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67345 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67346 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67347 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67348 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67349 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67350 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67351 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67352 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67353 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67354 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67355 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67356 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67357 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67358 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67359 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67360 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67361 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67362 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67363 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67364 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67365 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67366 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67367 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67368 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67369 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67370 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67371 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67372 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67373 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67374 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67375 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67376 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67377 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67378 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67379 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67380 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67381 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67382 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67383 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67384 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67385 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67386 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67387 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67388 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67389 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67390 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67391 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67392 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			67393 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67394 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67395 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67396 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67397 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67398 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67399 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67400 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67401 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67402 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67403 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67404 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67405 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67406 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67407 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67408 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67409 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			67410 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			67411 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67412 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67413 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67414 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67415 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67416 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67417 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67418 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67419 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67420 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67421 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67422 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67423 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67424 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67425 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67426 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67427 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67428 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67429 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67430 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67431 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67432 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67433 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67434 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67435 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67436 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67437 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67438 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67439 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67440 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67441 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67442 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67443 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67444 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67445 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67446 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67447 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67448 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67449 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67450 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67451 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67452 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67453 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67454 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67455 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67456 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67457 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67458 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67459 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67460 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67461 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67462 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67463 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67464 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67465 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67466 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67467 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67468 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67469 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67470 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67471 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67472 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67473 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67474 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67475 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67476 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67477 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67478 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67479 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67480 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67481 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67482 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67483 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67484 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67485 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67486 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67487 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67488 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67489 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67490 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67491 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67492 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67493 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67494 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67495 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67496 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67497 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67498 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67499 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67500 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67501 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67502 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67503 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67504 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67505 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67506 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67507 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67508 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67509 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67510 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67511 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67512 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67513 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67514 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67515 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67516 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67517 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67518 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67519 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67520 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67521 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67522 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67523 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67524 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67525 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67526 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67527 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67528 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67529 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67530 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67531 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67532 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67533 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67534 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67535 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67536 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67537 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67538 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67539 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67540 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67541 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67542 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67543 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67544 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67545 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67546 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67547 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67548 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67549 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67550 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67551 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67552 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67553 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67554 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67555 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67556 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67557 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67558 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67559 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67560 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67561 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67562 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67563 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67564 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67565 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67566 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67567 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67568 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67569 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67570 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67571 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67572 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67573 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67574 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67575 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67576 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67577 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67578 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67579 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67580 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67581 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67582 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67583 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67584 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67585 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67586 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67587 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67588 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67589 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67590 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67591 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67592 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67593 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67594 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67595 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67596 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67597 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67598 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67599 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67600 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			67601 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67602 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67603 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67604 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67605 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67606 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67607 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67608 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67609 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67610 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67611 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67612 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67613 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67614 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67615 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67616 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67617 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67618 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67619 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67620 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67621 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67622 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67623 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			67624 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67625 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67626 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67627 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67628 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67629 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67630 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67631 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67632 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67633 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67634 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67635 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67636 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67637 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67638 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67639 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67640 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67641 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67642 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67643 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67644 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67645 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67646 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67647 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67648 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67649 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67650 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67651 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67652 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67653 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67654 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67655 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67656 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67657 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67658 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67659 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67660 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67661 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67662 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67663 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67664 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67665 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67666 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67667 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67668 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67669 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67670 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67671 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67672 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67673 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67674 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67675 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67676 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67677 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67678 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67679 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67680 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67681 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67682 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67683 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67684 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67685 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67686 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67687 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67688 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67689 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67690 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67691 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67692 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67693 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67694 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67695 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67696 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67697 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67698 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67699 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67700 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67701 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67702 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67703 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67704 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67705 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67706 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67707 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67708 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67709 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67710 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67711 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67712 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67713 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67714 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67715 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67716 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67717 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67718 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67719 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67720 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67721 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67722 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67723 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67724 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67725 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67726 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67727 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67728 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67729 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67730 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67731 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67732 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67733 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67734 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67735 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67736 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67737 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67738 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67739 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67740 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67741 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67742 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67743 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67744 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67745 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67746 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67747 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67748 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67749 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67750 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67751 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67752 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67753 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67754 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67755 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67756 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67757 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67758 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67759 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67760 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67761 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67762 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67763 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67764 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67765 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67766 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67767 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67768 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67769 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67770 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67771 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67772 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67773 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67774 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67775 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67776 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67777 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67778 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67779 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67780 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67781 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67782 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67783 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67784 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67785 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67786 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67787 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67788 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67789 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67790 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67791 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67792 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67793 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67794 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67795 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67796 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67797 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67798 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67799 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67800 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67801 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67802 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67803 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67804 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67805 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67806 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67807 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67808 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			67809 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67810 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67811 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67812 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67813 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67814 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67815 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67816 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67817 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67818 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67819 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67820 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67821 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67822 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67823 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67824 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67825 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67826 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67827 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67828 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67829 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67830 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67831 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67832 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			67833 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67834 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67835 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67836 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67837 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67838 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67839 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67840 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67841 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67842 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67843 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67844 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67845 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67846 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67847 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67848 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67849 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67850 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67851 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67852 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67853 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67854 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67855 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67856 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67857 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67858 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67859 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67860 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67861 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67862 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67863 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67864 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67865 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67866 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67867 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67868 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67869 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67870 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67871 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67872 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67873 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67874 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67875 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67876 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67877 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67878 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67879 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67880 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67881 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67882 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67883 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67884 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67885 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67886 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67887 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67888 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67889 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67890 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67891 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67892 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67893 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67894 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67895 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67896 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67897 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67898 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67899 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67900 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67901 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67902 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67903 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67904 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67905 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67906 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67907 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67908 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67909 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67910 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67911 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67912 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67913 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67914 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67915 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67916 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67917 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67918 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67919 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67920 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67921 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67922 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67923 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67924 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67925 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67926 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67927 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67928 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67929 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67930 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67931 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67932 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67933 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67934 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67935 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67936 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67937 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67938 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67939 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67940 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67941 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67942 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67943 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67944 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67945 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67946 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67947 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67948 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67949 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67950 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67951 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67952 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67953 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67954 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67955 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67956 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67957 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67958 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67959 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67960 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67961 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67962 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67963 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67964 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67965 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67966 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67967 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67968 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67969 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67970 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67971 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67972 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67973 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67974 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67975 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67976 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67977 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67978 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67979 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67980 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67981 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67982 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67983 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67984 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67985 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67986 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67987 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67988 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67989 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67990 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67991 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67992 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67993 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67994 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67995 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67996 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67997 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67998 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			67999 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
