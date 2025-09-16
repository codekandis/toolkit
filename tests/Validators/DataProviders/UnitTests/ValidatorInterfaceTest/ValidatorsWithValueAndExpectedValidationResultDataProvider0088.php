<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\NullableIsInArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInBackedEnumValuesArrayValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0088 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			88000 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88001 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88002 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88003 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88004 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88005 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88006 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88007 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88008 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88009 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88010 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88011 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88012 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88013 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88014 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88015 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88016 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88017 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88018 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88019 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88020 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88021 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88022 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88023 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88024 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88025 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88026 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88027 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88028 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88029 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88030 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88031 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88032 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88033 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88034 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88035 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88036 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88037 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88038 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88039 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88040 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88041 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88042 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88043 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88044 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88045 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88046 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88047 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88048 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88049 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88050 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88051 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88052 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88053 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88054 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88055 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88056 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88057 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88058 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88059 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88060 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88061 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88062 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88063 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88064 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88065 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88066 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88067 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88068 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88069 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88070 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88071 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88072 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88073 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88074 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88075 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88076 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88077 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88078 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88079 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88080 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88081 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88082 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88083 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88084 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88085 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88086 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88087 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88088 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88089 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88090 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88091 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88092 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88093 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88094 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88095 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88096 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88097 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88098 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88099 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88100 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88101 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88102 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88103 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88104 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88105 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88106 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88107 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88108 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88109 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88110 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88111 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88112 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88113 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88114 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88115 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88116 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88117 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88118 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88119 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88120 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88121 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88122 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88123 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88124 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88125 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88126 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88127 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88128 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88129 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88130 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88131 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88132 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88133 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88134 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88135 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88136 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88137 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88138 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88139 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88140 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88141 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88142 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88143 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88144 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88145 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88146 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88147 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88148 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88149 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88150 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88151 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88152 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88153 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88154 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88155 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88156 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88157 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88158 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88159 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88160 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88161 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88162 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88163 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88164 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88165 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88166 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88167 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88168 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88169 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88170 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88171 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88172 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88173 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88174 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88175 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88176 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88177 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88178 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88179 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88180 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88181 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88182 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88183 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88184 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88185 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88186 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88187 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88188 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88189 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88190 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88191 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88192 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88193 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88194 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88195 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88196 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88197 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88198 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88199 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88200 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88201 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88202 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88203 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88204 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88205 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88206 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88207 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88208 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88209 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88210 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88211 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88212 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88213 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88214 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88215 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88216 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88217 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88218 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88219 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88220 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88221 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88222 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88223 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88224 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88225 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88226 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88227 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88228 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88229 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88230 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88231 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88232 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88233 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88234 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88235 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88236 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88237 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88238 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88239 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88240 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88241 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88242 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88243 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88244 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88245 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88246 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88247 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88248 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88249 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88250 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88251 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88252 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88253 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88254 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88255 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88256 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88257 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88258 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88259 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88260 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88261 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88262 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88263 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88264 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88265 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88266 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88267 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88268 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88269 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88270 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88271 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88272 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88273 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88274 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88275 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88276 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88277 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88278 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88279 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88280 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88281 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88282 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88283 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88284 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88285 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88286 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88287 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88288 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88289 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88290 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88291 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88292 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88293 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88294 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88295 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88296 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88297 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88298 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88299 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88300 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88301 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88302 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88303 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88304 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88305 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88306 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88307 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88308 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88309 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88310 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88311 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88312 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88313 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88314 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88315 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88316 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88317 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88318 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88319 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88320 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88321 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88322 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88323 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88324 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88325 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88326 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88327 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88328 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88329 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88330 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88331 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88332 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88333 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88334 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88335 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88336 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88337 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88338 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88339 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88340 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88341 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88342 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88343 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88344 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88345 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88346 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88347 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88348 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88349 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88350 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88351 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88352 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88353 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88354 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88355 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88356 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88357 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88358 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88359 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88360 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88361 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88362 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88363 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88364 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88365 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88366 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88367 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88368 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88369 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88370 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88371 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88372 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88373 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88374 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88375 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88376 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88377 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88378 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88379 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88380 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88381 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88382 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88383 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88384 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88385 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88386 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88387 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88388 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88389 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88390 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88391 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88392 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88393 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88394 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88395 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88396 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88397 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88398 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88399 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88400 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88401 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88402 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88403 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88404 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88405 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88406 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88407 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88408 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88409 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88410 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88411 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88412 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88413 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88414 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88415 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88416 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88417 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88418 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88419 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88420 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88421 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88422 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88423 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88424 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88425 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88426 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88427 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88428 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88429 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88430 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88431 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88432 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88433 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88434 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88435 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88436 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88437 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88438 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88439 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88440 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88441 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88442 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88443 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88444 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88445 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88446 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88447 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88448 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88449 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88450 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88451 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88452 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88453 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88454 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88455 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88456 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88457 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88458 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88459 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88460 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88461 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88462 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88463 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88464 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88465 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88466 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88467 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88468 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88469 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88470 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88471 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88472 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88473 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88474 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88475 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88476 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88477 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88478 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88479 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88480 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88481 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88482 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88483 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88484 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88485 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88486 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88487 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88488 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88489 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88490 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88491 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88492 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88493 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88494 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88495 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88496 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88497 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88498 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88499 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88500 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88501 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88502 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88503 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88504 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88505 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88506 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88507 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88508 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88509 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88510 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88511 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88512 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88513 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88514 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88515 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88516 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88517 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88518 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88519 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88520 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88521 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88522 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88523 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88524 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88525 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88526 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88527 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88528 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88529 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88530 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88531 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88532 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88533 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88534 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88535 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88536 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88537 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88538 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88539 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88540 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88541 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88542 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88543 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88544 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88545 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88546 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88547 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88548 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88549 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88550 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88551 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88552 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88553 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88554 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88555 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88556 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88557 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88558 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88559 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88560 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88561 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88562 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88563 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88564 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88565 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88566 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88567 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88568 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88569 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88570 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88571 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88572 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88573 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88574 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88575 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88576 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88577 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88578 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88579 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88580 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88581 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88582 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88583 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88584 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88585 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88586 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88587 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88588 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88589 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88590 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88591 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88592 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88593 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88594 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88595 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88596 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88597 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88598 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88599 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88600 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88601 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88602 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88603 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88604 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88605 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88606 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88607 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88608 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88609 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88610 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88611 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88612 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88613 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88614 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88615 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88616 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88617 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88618 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88619 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88620 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88621 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88622 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88623 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88624 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88625 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88626 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88627 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88628 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88629 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88630 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88631 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88632 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88633 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88634 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88635 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88636 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88637 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88638 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88639 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88640 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88641 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88642 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88643 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88644 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88645 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88646 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88647 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88648 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88649 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88650 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88651 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88652 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88653 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88654 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88655 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88656 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88657 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88658 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88659 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88660 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88661 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88662 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88663 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88664 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88665 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88666 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88667 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88668 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88669 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88670 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88671 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88672 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88673 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88674 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88675 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88676 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88677 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88678 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88679 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88680 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88681 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88682 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88683 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88684 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88685 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88686 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88687 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88688 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88689 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88690 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88691 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88692 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88693 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88694 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88695 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88696 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88697 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88698 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88699 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88700 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88701 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88702 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88703 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88704 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88705 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88706 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88707 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88708 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88709 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88710 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88711 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88712 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88713 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88714 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88715 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88716 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88717 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88718 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88719 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88720 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88721 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88722 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88723 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88724 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88725 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88726 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88727 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88728 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88729 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88730 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88731 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88732 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88733 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88734 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88735 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88736 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88737 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88738 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88739 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88740 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88741 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88742 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88743 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88744 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88745 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88746 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88747 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88748 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88749 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88750 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88751 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88752 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88753 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88754 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88755 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88756 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88757 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88758 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88759 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88760 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88761 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88762 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88763 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88764 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88765 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88766 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88767 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88768 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88769 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88770 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88771 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88772 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88773 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88774 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88775 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88776 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88777 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88778 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88779 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88780 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88781 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88782 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88783 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88784 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88785 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88786 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88787 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88788 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88789 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88790 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88791 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88792 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88793 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88794 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88795 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88796 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88797 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88798 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88799 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88800 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88801 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88802 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88803 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88804 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88805 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88806 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88807 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88808 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88809 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88810 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88811 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88812 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88813 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88814 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88815 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88816 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88817 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88818 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88819 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88820 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88821 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88822 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88823 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88824 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88825 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88826 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88827 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88828 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88829 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88830 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88831 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88832 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88833 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88834 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88835 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88836 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88837 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88838 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88839 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88840 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88841 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88842 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88843 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88844 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88845 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88846 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88847 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88848 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88849 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88850 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88851 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88852 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88853 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88854 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88855 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88856 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88857 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88858 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88859 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88860 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88861 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88862 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88863 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88864 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88865 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88866 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88867 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88868 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88869 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88870 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88871 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88872 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88873 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88874 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88875 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88876 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88877 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88878 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88879 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88880 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88881 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88882 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88883 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88884 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88885 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88886 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88887 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88888 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88889 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88890 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88891 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88892 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88893 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88894 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88895 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88896 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88897 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88898 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88899 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88900 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88901 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88902 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88903 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88904 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88905 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88906 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88907 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88908 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88909 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88910 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88911 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88912 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88913 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88914 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88915 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88916 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88917 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88918 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88919 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88920 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88921 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88922 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88923 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88924 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88925 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88926 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88927 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88928 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88929 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88930 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88931 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88932 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88933 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88934 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88935 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88936 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88937 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88938 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88939 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88940 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88941 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88942 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88943 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88944 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88945 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88946 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88947 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88948 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88949 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88950 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88951 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88952 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88953 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88954 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88955 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88956 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88957 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88958 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88959 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88960 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88961 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88962 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88963 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88964 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88965 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88966 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88967 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88968 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88969 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88970 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88971 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88972 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88973 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88974 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88975 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88976 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88977 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88978 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88979 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88980 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88981 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88982 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88983 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88984 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88985 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88986 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88987 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88988 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88989 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88990 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88991 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88992 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88993 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88994 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88995 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88996 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88997 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88998 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88999 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
