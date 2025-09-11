<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInArrayValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0026 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			26000 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26001 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26002 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26003 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26004 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26005 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26006 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26007 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26008 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26009 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26010 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26011 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26012 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26013 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26014 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26015 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26016 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26017 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26018 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26019 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26020 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26021 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26022 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26023 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26024 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26025 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26026 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26027 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26028 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26029 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26030 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26031 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26032 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26033 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26034 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26035 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26036 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26037 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26038 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26039 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26040 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26041 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26042 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26043 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26044 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26045 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26046 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26047 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26048 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26049 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26050 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26051 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26052 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26053 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26054 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26055 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26056 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26057 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26058 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26059 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26060 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26061 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26062 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26063 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26064 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26065 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26066 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26067 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26068 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26069 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26070 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26071 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26072 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26073 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26074 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26075 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26076 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26077 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26078 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26079 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26080 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26081 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26082 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26083 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26084 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26085 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26086 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26087 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26088 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26089 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26090 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26091 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26092 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26093 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26094 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26095 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26096 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26097 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26098 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26099 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26100 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26101 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26102 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26103 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26104 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26105 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26106 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26107 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26108 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26109 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26110 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26111 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26112 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26113 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26114 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26115 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26116 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26117 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26118 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26119 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26120 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26121 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26122 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26123 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26124 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26125 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26126 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26127 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26128 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26129 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26130 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26131 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26132 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26133 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26134 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26135 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26136 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26137 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26138 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26139 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26140 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26141 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26142 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26143 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26144 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26145 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26146 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26147 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26148 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26149 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26150 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26151 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26152 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26153 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26154 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26155 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26156 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26157 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26158 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26159 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26160 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26161 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26162 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26163 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26164 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26165 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26166 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26167 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26168 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26169 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26170 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26171 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26172 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26173 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26174 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26175 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26176 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26177 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26178 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26179 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26180 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26181 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26182 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26183 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26184 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26185 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26186 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26187 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26188 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26189 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26190 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26191 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26192 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26193 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26194 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26195 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26196 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26197 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26198 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26199 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26200 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26201 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26202 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26203 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26204 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26205 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26206 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26207 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26208 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26209 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26210 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26211 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26212 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26213 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26214 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26215 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26216 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26217 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26218 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26219 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26220 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26221 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26222 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26223 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26224 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26225 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26226 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26227 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26228 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26229 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26230 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26231 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26232 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26233 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26234 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26235 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26236 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26237 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26238 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26239 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26240 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26241 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26242 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26243 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26244 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26245 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26246 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26247 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26248 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26249 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26250 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26251 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26252 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26253 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26254 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26255 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26256 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26257 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26258 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26259 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26260 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26261 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26262 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26263 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26264 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26265 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26266 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26267 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26268 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26269 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26270 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26271 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26272 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26273 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26274 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26275 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26276 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26277 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26278 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26279 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26280 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26281 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26282 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26283 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26284 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26285 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26286 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26287 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26288 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26289 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26290 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26291 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26292 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26293 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26294 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26295 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26296 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26297 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26298 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26299 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26300 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26301 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26302 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26303 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26304 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26305 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26306 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26307 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26308 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26309 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26310 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26311 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26312 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26313 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26314 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26315 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26316 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26317 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26318 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26319 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26320 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26321 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26322 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26323 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26324 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26325 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26326 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26327 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26328 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26329 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26330 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26331 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26332 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26333 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26334 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26335 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26336 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26337 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26338 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26339 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26340 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26341 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26342 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26343 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26344 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26345 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26346 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26347 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26348 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26349 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26350 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26351 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26352 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26353 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26354 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26355 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26356 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26357 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26358 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26359 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26360 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26361 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26362 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26363 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26364 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26365 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26366 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26367 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26368 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26369 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26370 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26371 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26372 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26373 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26374 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26375 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26376 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26377 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26378 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26379 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26380 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26381 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26382 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26383 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26384 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26385 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26386 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26387 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26388 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26389 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26390 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26391 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26392 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26393 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26394 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26395 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26396 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26397 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26398 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26399 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26400 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26401 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26402 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26403 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26404 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26405 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26406 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26407 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26408 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26409 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26410 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26411 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26412 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26413 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26414 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26415 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26416 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26417 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26418 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26419 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26420 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26421 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26422 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26423 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26424 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26425 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26426 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26427 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26428 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26429 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26430 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26431 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26432 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26433 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26434 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26435 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26436 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26437 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26438 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26439 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26440 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26441 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26442 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26443 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26444 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26445 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26446 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26447 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26448 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26449 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26450 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26451 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26452 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26453 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26454 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26455 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26456 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26457 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26458 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26459 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26460 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26461 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26462 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26463 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26464 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26465 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26466 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26467 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26468 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26469 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26470 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26471 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26472 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26473 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26474 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26475 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26476 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26477 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26478 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26479 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26480 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26481 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26482 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26483 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26484 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26485 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26486 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26487 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26488 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26489 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26490 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26491 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26492 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26493 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26494 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26495 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26496 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26497 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26498 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26499 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26500 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26501 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26502 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26503 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26504 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26505 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26506 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26507 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26508 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26509 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26510 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26511 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26512 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26513 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26514 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26515 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26516 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26517 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26518 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26519 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26520 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26521 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26522 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26523 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26524 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26525 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26526 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26527 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26528 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26529 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26530 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26531 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26532 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26533 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26534 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26535 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26536 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26537 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26538 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26539 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26540 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26541 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26542 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26543 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26544 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26545 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26546 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26547 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26548 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26549 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26550 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26551 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26552 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26553 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26554 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26555 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26556 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26557 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26558 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26559 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26560 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26561 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26562 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26563 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26564 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26565 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26566 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26567 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26568 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26569 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26570 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26571 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26572 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26573 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26574 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26575 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26576 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26577 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26578 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26579 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26580 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26581 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26582 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26583 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26584 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26585 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26586 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26587 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26588 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26589 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26590 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26591 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26592 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26593 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26594 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26595 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26596 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26597 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26598 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26599 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26600 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26601 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26602 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26603 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26604 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26605 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26606 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26607 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26608 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26609 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26610 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26611 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26612 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26613 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26614 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26615 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26616 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26617 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26618 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26619 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26620 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26621 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26622 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26623 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26624 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26625 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26626 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26627 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26628 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26629 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26630 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26631 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26632 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26633 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26634 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26635 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26636 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26637 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26638 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26639 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26640 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26641 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26642 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26643 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26644 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26645 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26646 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26647 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26648 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26649 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26650 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26651 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26652 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26653 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26654 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26655 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26656 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26657 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26658 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26659 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26660 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26661 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26662 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26663 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26664 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26665 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26666 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26667 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26668 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26669 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26670 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26671 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26672 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26673 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26674 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26675 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26676 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26677 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26678 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26679 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26680 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26681 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26682 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26683 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26684 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26685 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26686 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26687 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26688 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26689 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26690 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26691 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26692 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26693 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26694 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26695 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26696 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26697 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26698 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26699 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26700 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26701 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26702 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26703 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26704 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26705 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26706 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26707 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26708 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26709 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26710 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26711 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26712 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26713 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26714 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26715 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26716 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26717 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26718 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26719 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26720 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26721 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26722 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26723 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26724 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26725 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26726 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26727 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26728 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26729 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26730 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26731 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26732 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26733 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26734 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26735 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26736 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26737 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26738 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26739 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26740 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26741 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26742 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26743 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26744 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26745 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26746 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26747 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26748 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26749 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26750 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26751 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26752 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26753 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26754 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26755 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26756 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26757 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26758 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26759 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26760 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26761 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26762 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26763 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26764 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26765 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26766 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26767 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26768 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26769 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26770 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26771 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26772 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26773 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26774 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26775 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26776 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26777 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26778 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26779 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26780 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26781 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26782 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26783 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26784 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26785 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26786 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26787 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26788 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26789 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26790 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26791 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26792 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26793 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26794 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26795 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26796 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26797 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26798 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26799 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26800 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26801 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26802 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26803 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26804 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26805 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26806 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26807 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26808 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26809 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26810 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26811 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26812 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26813 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26814 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26815 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26816 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26817 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26818 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26819 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26820 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26821 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26822 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26823 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26824 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26825 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26826 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26827 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26828 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26829 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26830 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26831 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26832 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26833 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26834 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26835 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26836 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26837 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26838 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26839 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26840 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26841 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26842 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26843 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26844 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26845 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26846 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26847 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26848 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26849 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26850 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26851 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26852 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26853 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26854 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26855 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26856 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26857 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26858 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26859 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26860 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26861 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26862 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26863 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26864 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26865 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26866 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26867 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26868 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26869 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26870 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26871 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26872 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26873 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26874 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26875 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26876 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26877 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26878 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26879 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26880 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26881 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26882 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26883 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26884 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26885 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26886 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26887 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26888 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26889 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26890 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26891 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26892 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26893 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26894 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26895 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26896 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26897 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26898 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26899 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26900 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26901 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26902 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26903 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26904 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26905 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26906 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26907 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26908 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26909 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26910 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26911 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26912 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26913 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26914 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26915 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26916 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26917 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26918 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26919 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26920 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26921 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26922 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26923 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26924 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26925 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26926 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26927 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26928 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26929 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26930 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26931 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26932 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26933 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26934 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26935 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26936 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26937 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26938 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26939 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26940 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26941 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26942 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26943 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26944 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26945 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26946 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26947 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26948 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26949 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26950 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26951 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26952 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26953 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26954 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26955 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26956 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26957 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26958 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26959 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26960 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26961 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26962 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26963 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26964 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			26965 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26966 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26967 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26968 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26969 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26970 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26971 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26972 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26973 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26974 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26975 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26976 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26977 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26978 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26979 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26980 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26981 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26982 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26983 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26984 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26985 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26986 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26987 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26988 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26989 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26990 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26991 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26992 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26993 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26994 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26995 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26996 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26997 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26998 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			26999 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
