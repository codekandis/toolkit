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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0078 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			78000 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			78001 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78002 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78003 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78004 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78005 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78006 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78007 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78008 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78009 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78010 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78011 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78012 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78013 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78014 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78015 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78016 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78017 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78018 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78019 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78020 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78021 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78022 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78023 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78024 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78025 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78026 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78027 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78028 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78029 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78030 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78031 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78032 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78033 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78034 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78035 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78036 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78037 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78038 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78039 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78040 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78041 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78042 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78043 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78044 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78045 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78046 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78047 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78048 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78049 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78050 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78051 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78052 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78053 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78054 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78055 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78056 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78057 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78058 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78059 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78060 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78061 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78062 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78063 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78064 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78065 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78066 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78067 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78068 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78069 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78070 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78071 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78072 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78073 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78074 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78075 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78076 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78077 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78078 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78079 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78080 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78081 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78082 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78083 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78084 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78085 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78086 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78087 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78088 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78089 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78090 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78091 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78092 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78093 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78094 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78095 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78096 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78097 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78098 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78099 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78100 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78101 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78102 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78103 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			78104 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78105 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78106 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78107 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78108 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78109 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78110 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78111 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78112 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78113 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78114 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78115 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78116 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78117 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78118 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78119 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78120 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78121 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78122 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78123 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78124 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78125 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78126 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78127 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78128 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78129 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78130 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78131 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78132 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78133 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78134 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78135 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78136 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78137 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78138 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78139 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78140 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78141 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78142 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78143 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78144 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78145 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78146 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78147 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78148 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78149 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78150 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78151 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78152 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78153 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78154 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78155 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78156 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78157 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78158 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78159 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78160 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78161 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78162 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78163 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78164 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78165 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78166 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78167 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78168 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78169 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78170 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78171 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78172 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78173 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78174 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78175 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78176 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78177 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78178 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78179 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78180 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78181 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78182 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78183 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78184 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78185 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78186 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78187 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78188 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78189 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78190 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78191 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78192 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78193 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78194 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78195 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78196 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78197 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78198 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78199 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78200 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78201 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78202 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78203 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78204 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78205 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78206 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78207 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78208 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			78209 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78210 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78211 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78212 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78213 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78214 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78215 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78216 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78217 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78218 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78219 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78220 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78221 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78222 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78223 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78224 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78225 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78226 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78227 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78228 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78229 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78230 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78231 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78232 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78233 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78234 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78235 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78236 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78237 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78238 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78239 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78240 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78241 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78242 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78243 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78244 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78245 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78246 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78247 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78248 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78249 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78250 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78251 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78252 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78253 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78254 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78255 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78256 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78257 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78258 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78259 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78260 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78261 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78262 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78263 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78264 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78265 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78266 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78267 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78268 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78269 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78270 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78271 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78272 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78273 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78274 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78275 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78276 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78277 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78278 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78279 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78280 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78281 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78282 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78283 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78284 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78285 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78286 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78287 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78288 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78289 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78290 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78291 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78292 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78293 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78294 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78295 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78296 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78297 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78298 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78299 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78300 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78301 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78302 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78303 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78304 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78305 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78306 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78307 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78308 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78309 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78310 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78311 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78312 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			78313 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78314 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78315 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78316 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78317 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78318 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78319 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78320 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78321 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78322 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78323 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78324 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78325 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78326 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78327 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78328 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78329 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78330 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78331 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78332 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78333 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78334 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78335 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78336 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78337 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78338 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78339 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78340 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78341 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78342 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78343 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78344 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78345 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78346 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78347 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78348 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78349 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78350 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78351 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78352 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78353 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78354 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78355 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78356 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78357 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78358 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78359 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78360 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78361 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78362 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78363 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78364 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78365 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78366 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78367 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78368 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78369 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78370 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78371 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78372 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78373 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78374 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78375 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78376 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78377 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78378 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78379 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78380 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78381 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78382 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78383 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78384 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78385 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78386 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78387 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78388 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78389 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78390 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78391 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78392 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78393 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78394 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78395 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78396 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78397 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78398 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78399 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78400 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78401 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78402 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78403 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78404 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78405 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78406 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78407 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78408 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78409 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78410 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78411 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78412 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78413 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78414 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78415 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78416 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			78417 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78418 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78419 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78420 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78421 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78422 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78423 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78424 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78425 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78426 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78427 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78428 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78429 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78430 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78431 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78432 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78433 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78434 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78435 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78436 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78437 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78438 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78439 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78440 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78441 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78442 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78443 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78444 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78445 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78446 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78447 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78448 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78449 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78450 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78451 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78452 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78453 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78454 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78455 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78456 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78457 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78458 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78459 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78460 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78461 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78462 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78463 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78464 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78465 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78466 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78467 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78468 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78469 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78470 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78471 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78472 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78473 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78474 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78475 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78476 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78477 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78478 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78479 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78480 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78481 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78482 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78483 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78484 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78485 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78486 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78487 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78488 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78489 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78490 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78491 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78492 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78493 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78494 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78495 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78496 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78497 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78498 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78499 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78500 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78501 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78502 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78503 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78504 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78505 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78506 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78507 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78508 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78509 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78510 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78511 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78512 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78513 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78514 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78515 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78516 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78517 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78518 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78519 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			78520 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			78521 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78522 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78523 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78524 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78525 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78526 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78527 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78528 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78529 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78530 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78531 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78532 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78533 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78534 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78535 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78536 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78537 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78538 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78539 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78540 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78541 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78542 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78543 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78544 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78545 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78546 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78547 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78548 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78549 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78550 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78551 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78552 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78553 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78554 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78555 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78556 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78557 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78558 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78559 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78560 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78561 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78562 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78563 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78564 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78565 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78566 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78567 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78568 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78569 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78570 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78571 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78572 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78573 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78574 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78575 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78576 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78577 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78578 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78579 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78580 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78581 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78582 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78583 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78584 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78585 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78586 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78587 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78588 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78589 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78590 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78591 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78592 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78593 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78594 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78595 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78596 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78597 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78598 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78599 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78600 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78601 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78602 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78603 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78604 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78605 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78606 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78607 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78608 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78609 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78610 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78611 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78612 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78613 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78614 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78615 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78616 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78617 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78618 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78619 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78620 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78621 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78622 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78623 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78624 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			78625 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78626 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78627 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78628 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78629 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78630 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78631 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78632 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78633 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78634 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78635 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78636 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78637 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78638 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78639 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78640 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78641 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78642 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78643 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78644 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78645 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78646 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78647 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78648 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78649 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78650 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78651 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78652 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78653 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78654 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78655 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78656 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78657 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78658 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78659 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78660 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78661 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78662 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78663 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78664 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78665 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78666 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78667 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78668 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78669 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78670 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78671 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78672 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78673 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78674 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78675 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78676 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78677 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78678 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78679 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78680 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78681 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78682 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78683 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78684 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78685 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78686 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78687 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78688 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78689 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78690 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78691 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78692 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78693 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78694 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78695 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78696 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78697 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78698 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78699 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78700 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78701 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78702 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78703 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78704 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78705 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78706 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78707 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78708 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78709 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78710 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78711 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78712 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78713 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78714 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78715 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78716 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78717 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78718 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78719 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78720 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78721 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78722 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78723 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78724 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78725 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78726 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78727 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			78728 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			78729 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78730 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78731 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78732 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78733 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78734 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78735 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78736 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78737 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78738 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78739 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78740 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78741 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78742 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78743 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78744 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78745 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78746 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78747 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78748 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78749 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78750 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78751 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78752 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78753 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78754 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78755 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78756 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78757 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78758 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78759 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78760 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78761 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78762 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78763 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78764 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78765 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78766 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78767 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78768 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78769 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78770 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78771 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78772 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78773 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78774 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78775 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78776 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78777 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78778 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78779 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78780 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78781 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78782 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78783 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78784 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78785 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78786 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78787 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78788 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78789 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78790 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78791 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78792 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78793 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78794 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78795 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78796 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78797 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78798 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78799 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78800 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78801 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78802 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78803 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78804 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78805 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78806 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78807 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78808 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78809 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78810 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78811 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78812 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78813 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78814 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78815 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78816 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78817 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78818 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78819 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78820 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78821 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78822 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78823 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78824 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78825 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78826 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78827 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78828 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78829 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78830 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78831 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78832 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			78833 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78834 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78835 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78836 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78837 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78838 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78839 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78840 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78841 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78842 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78843 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78844 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78845 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78846 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78847 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78848 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78849 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78850 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78851 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78852 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78853 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78854 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78855 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78856 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78857 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78858 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78859 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78860 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78861 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78862 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78863 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78864 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78865 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78866 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78867 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78868 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78869 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78870 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78871 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78872 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78873 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78874 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78875 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78876 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78877 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78878 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78879 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78880 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78881 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78882 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78883 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78884 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78885 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78886 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78887 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78888 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78889 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78890 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78891 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78892 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78893 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78894 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78895 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78896 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78897 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78898 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78899 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78900 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78901 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78902 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78903 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78904 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78905 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78906 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78907 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78908 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78909 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78910 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78911 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78912 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78913 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78914 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78915 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78916 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78917 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78918 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78919 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78920 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78921 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78922 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78923 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78924 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78925 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78926 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78927 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78928 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78929 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78930 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78931 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78932 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78933 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78934 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78935 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78936 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78937 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78938 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78939 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78940 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78941 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			78942 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78943 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78944 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78945 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78946 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78947 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78948 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78949 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78950 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78951 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78952 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78953 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78954 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78955 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78956 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78957 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78958 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78959 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78960 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78961 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78962 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78963 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78964 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78965 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78966 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78967 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78968 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78969 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78970 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78971 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78972 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78973 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78974 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78975 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78976 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78977 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78978 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78979 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78980 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78981 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78982 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78983 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78984 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78985 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78986 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78987 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78988 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78989 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78990 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78991 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78992 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78993 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78994 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78995 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78996 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78997 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78998 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			78999 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
