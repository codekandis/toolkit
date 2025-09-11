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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0073 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			73000 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73001 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73002 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73003 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73004 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73005 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73006 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73007 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73008 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			73009 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73010 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73011 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73012 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73013 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73014 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73015 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73016 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73017 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73018 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73019 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73020 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73021 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73022 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73023 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73024 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73025 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73026 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73027 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73028 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73029 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73030 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73031 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73032 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73033 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73034 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73035 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73036 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73037 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73038 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73039 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73040 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73041 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73042 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73043 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73044 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73045 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73046 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73047 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73048 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73049 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73050 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73051 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73052 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73053 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73054 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73055 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73056 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73057 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73058 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73059 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73060 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73061 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73062 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73063 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73064 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73065 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73066 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73067 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			73068 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			73069 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73070 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73071 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73072 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73073 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73074 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73075 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73076 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73077 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73078 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73079 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73080 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73081 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73082 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73083 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73084 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73085 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73086 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73087 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73088 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73089 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73090 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73091 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73092 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73093 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73094 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73095 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73096 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73097 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73098 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73099 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73100 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73101 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73102 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73103 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73104 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73105 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73106 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73107 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73108 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73109 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73110 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73111 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73112 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73113 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73114 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73115 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73116 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73117 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73118 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73119 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73120 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73121 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73122 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73123 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73124 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73125 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73126 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73127 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73128 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73129 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73130 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73131 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73132 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73133 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73134 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73135 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73136 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73137 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73138 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73139 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73140 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73141 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73142 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73143 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73144 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73145 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73146 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73147 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73148 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73149 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73150 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73151 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73152 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73153 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73154 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73155 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73156 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73157 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73158 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73159 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73160 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73161 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73162 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73163 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73164 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73165 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73166 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73167 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73168 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73169 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73170 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73171 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73172 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73173 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73174 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73175 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73176 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73177 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73178 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73179 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73180 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73181 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73182 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73183 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73184 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73185 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73186 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73187 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73188 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73189 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73190 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73191 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73192 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73193 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73194 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73195 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73196 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73197 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73198 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73199 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73200 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73201 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73202 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73203 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73204 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73205 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73206 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73207 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73208 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73209 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73210 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73211 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73212 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73213 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73214 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73215 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73216 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			73217 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73218 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73219 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73220 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73221 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73222 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73223 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73224 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73225 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73226 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73227 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73228 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73229 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73230 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73231 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73232 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73233 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73234 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73235 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73236 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73237 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73238 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73239 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73240 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73241 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73242 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73243 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73244 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73245 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73246 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73247 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73248 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73249 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73250 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73251 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73252 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73253 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73254 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73255 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73256 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73257 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73258 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73259 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73260 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73261 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73262 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73263 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73264 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73265 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73266 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73267 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73268 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73269 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73270 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73271 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73272 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73273 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73274 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73275 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			73276 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			73277 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73278 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73279 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73280 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73281 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73282 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73283 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73284 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73285 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73286 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73287 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73288 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73289 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73290 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73291 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73292 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73293 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73294 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73295 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73296 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73297 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73298 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73299 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73300 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73301 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73302 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73303 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73304 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73305 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73306 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73307 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73308 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73309 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73310 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73311 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73312 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73313 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73314 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73315 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73316 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73317 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73318 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73319 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73320 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73321 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73322 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73323 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73324 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73325 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73326 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73327 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73328 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73329 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73330 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73331 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73332 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73333 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73334 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73335 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73336 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73337 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73338 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73339 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73340 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73341 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73342 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73343 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73344 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73345 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73346 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73347 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73348 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73349 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73350 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73351 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73352 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73353 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73354 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73355 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73356 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73357 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73358 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73359 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73360 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73361 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73362 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73363 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73364 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73365 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73366 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73367 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73368 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73369 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73370 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73371 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73372 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73373 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73374 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73375 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73376 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73377 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73378 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73379 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73380 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73381 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73382 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73383 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73384 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73385 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73386 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73387 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73388 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73389 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73390 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73391 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73392 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73393 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73394 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73395 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73396 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73397 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73398 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73399 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73400 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73401 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73402 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73403 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73404 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73405 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73406 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73407 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73408 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73409 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73410 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73411 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73412 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73413 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73414 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73415 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73416 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73417 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73418 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73419 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73420 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73421 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73422 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73423 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73424 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			73425 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73426 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73427 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73428 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73429 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73430 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73431 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73432 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73433 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73434 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73435 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73436 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73437 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73438 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73439 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73440 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73441 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73442 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73443 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73444 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73445 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73446 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73447 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73448 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73449 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73450 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73451 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73452 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73453 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73454 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73455 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73456 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73457 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73458 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73459 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73460 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73461 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73462 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73463 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73464 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73465 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73466 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73467 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73468 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73469 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73470 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73471 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73472 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73473 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73474 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73475 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73476 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73477 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73478 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73479 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73480 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73481 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73482 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73483 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73484 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73485 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73486 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73487 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73488 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73489 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73490 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73491 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			73492 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73493 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73494 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73495 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73496 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73497 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73498 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73499 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73500 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73501 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73502 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73503 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73504 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73505 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73506 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73507 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73508 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73509 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73510 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73511 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73512 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73513 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73514 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73515 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73516 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73517 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73518 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73519 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73520 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73521 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73522 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73523 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73524 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73525 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73526 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73527 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73528 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73529 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73530 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73531 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73532 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73533 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73534 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73535 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73536 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73537 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73538 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73539 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73540 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73541 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73542 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73543 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73544 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73545 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73546 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73547 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73548 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73549 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73550 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73551 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73552 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73553 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73554 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73555 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73556 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73557 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73558 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73559 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73560 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73561 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73562 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73563 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73564 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73565 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73566 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73567 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73568 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73569 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73570 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73571 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73572 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73573 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73574 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73575 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73576 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73577 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73578 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73579 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73580 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73581 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73582 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73583 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73584 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73585 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73586 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73587 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73588 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73589 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73590 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73591 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73592 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73593 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73594 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73595 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73596 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73597 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73598 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73599 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73600 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73601 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73602 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73603 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73604 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73605 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73606 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73607 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73608 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73609 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73610 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73611 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73612 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73613 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73614 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73615 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73616 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73617 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73618 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73619 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73620 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73621 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73622 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73623 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73624 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73625 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73626 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73627 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73628 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73629 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73630 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73631 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73632 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			73633 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73634 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73635 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73636 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73637 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73638 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73639 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73640 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73641 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73642 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73643 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73644 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73645 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73646 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73647 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73648 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73649 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73650 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73651 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73652 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73653 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73654 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73655 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73656 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73657 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73658 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73659 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73660 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73661 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73662 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73663 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73664 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73665 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73666 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73667 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73668 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73669 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73670 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73671 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73672 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73673 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73674 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73675 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73676 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73677 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73678 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73679 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73680 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73681 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73682 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73683 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73684 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73685 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73686 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73687 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73688 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73689 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73690 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73691 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73692 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73693 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73694 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73695 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73696 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73697 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73698 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73699 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73700 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			73701 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73702 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73703 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73704 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73705 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73706 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73707 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73708 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73709 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73710 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73711 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73712 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73713 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73714 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73715 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73716 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73717 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73718 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73719 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73720 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73721 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73722 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73723 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73724 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73725 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73726 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73727 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73728 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73729 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73730 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73731 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73732 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73733 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73734 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73735 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73736 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73737 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73738 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73739 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73740 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73741 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73742 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73743 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73744 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73745 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73746 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73747 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73748 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73749 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73750 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73751 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73752 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73753 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73754 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73755 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73756 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73757 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73758 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73759 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73760 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73761 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73762 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73763 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73764 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73765 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73766 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73767 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73768 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73769 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73770 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73771 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73772 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73773 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73774 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73775 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73776 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73777 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73778 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73779 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73780 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73781 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73782 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73783 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73784 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73785 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73786 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73787 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73788 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73789 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73790 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73791 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73792 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73793 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73794 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73795 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73796 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73797 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73798 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73799 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73800 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73801 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73802 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73803 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73804 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73805 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73806 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73807 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73808 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73809 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73810 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73811 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73812 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73813 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73814 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73815 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73816 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73817 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73818 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73819 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73820 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73821 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73822 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73823 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73824 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73825 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73826 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73827 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73828 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73829 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73830 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73831 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73832 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73833 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73834 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73835 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73836 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73837 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73838 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73839 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73840 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			73841 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73842 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73843 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73844 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73845 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73846 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73847 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73848 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73849 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73850 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73851 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73852 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73853 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73854 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73855 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73856 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73857 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73858 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73859 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73860 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73861 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73862 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73863 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73864 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73865 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73866 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73867 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73868 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73869 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73870 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73871 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73872 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73873 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73874 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73875 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73876 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73877 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73878 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73879 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73880 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73881 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73882 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73883 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73884 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73885 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73886 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73887 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73888 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73889 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73890 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73891 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73892 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73893 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73894 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73895 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73896 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73897 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73898 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73899 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73900 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73901 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73902 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73903 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73904 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73905 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73906 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73907 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			73908 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			73909 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73910 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73911 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73912 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73913 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73914 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73915 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73916 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73917 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73918 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73919 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73920 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73921 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73922 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73923 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73924 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73925 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73926 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73927 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73928 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73929 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73930 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73931 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73932 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73933 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73934 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73935 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73936 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73937 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73938 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73939 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73940 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73941 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73942 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73943 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73944 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73945 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73946 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73947 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73948 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73949 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73950 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73951 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73952 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73953 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73954 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73955 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73956 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73957 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73958 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73959 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73960 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73961 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73962 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73963 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73964 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73965 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73966 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73967 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73968 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73969 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73970 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73971 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73972 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73973 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73974 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73975 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73976 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73977 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73978 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73979 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73980 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73981 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73982 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73983 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73984 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73985 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73986 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73987 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73988 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73989 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73990 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73991 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73992 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73993 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73994 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73995 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73996 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73997 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73998 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			73999 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
