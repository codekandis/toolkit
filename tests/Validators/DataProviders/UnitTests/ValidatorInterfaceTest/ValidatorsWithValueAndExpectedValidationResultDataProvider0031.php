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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0031 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			31000 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31001 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31002 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31003 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31004 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31005 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31006 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31007 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31008 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31009 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31010 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31011 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31012 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31013 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31014 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31015 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31016 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31017 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31018 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31019 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31020 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31021 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31022 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31023 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31024 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31025 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31026 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31027 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31028 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31029 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31030 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31031 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31032 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31033 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31034 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31035 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31036 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31037 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31038 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31039 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31040 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31041 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31042 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31043 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31044 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31045 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31046 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31047 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31048 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31049 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31050 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31051 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31052 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31053 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31054 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31055 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31056 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31057 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31058 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31059 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31060 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31061 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31062 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31063 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31064 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31065 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31066 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31067 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31068 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31069 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31070 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31071 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31072 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31073 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31074 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31075 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31076 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31077 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31078 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31079 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31080 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31081 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31082 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31083 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31084 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31085 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31086 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31087 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31088 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31089 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31090 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31091 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31092 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31093 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31094 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31095 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31096 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31097 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31098 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31099 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31100 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31101 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31102 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31103 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31104 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31105 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31106 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31107 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31108 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31109 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31110 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31111 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31112 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31113 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31114 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31115 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31116 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31117 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31118 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31119 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31120 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31121 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31122 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31123 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31124 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31125 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31126 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31127 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31128 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31129 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31130 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31131 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31132 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31133 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31134 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31135 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31136 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31137 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31138 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31139 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31140 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31141 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31142 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31143 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31144 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31145 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31146 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31147 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31148 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31149 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31150 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31151 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31152 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31153 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31154 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31155 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31156 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31157 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31158 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31159 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31160 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31161 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31162 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31163 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31164 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31165 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31166 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31167 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31168 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31169 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31170 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31171 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31172 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31173 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31174 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31175 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31176 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31177 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31178 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31179 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31180 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31181 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31182 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31183 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31184 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31185 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31186 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31187 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31188 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31189 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31190 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31191 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31192 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31193 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31194 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31195 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31196 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31197 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31198 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31199 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31200 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31201 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31202 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31203 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31204 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31205 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31206 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31207 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31208 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31209 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31210 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31211 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31212 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31213 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31214 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31215 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31216 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31217 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31218 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31219 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31220 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31221 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31222 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31223 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31224 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31225 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31226 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31227 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31228 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31229 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31230 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31231 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31232 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31233 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31234 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31235 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31236 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31237 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31238 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31239 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31240 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31241 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31242 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31243 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31244 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31245 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31246 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31247 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31248 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31249 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31250 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31251 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31252 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31253 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31254 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31255 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31256 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31257 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31258 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31259 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31260 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31261 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31262 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31263 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31264 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31265 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31266 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31267 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31268 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31269 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31270 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31271 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31272 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31273 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31274 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31275 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31276 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31277 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31278 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31279 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31280 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31281 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31282 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31283 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31284 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31285 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31286 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31287 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31288 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31289 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31290 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31291 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31292 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31293 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31294 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31295 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31296 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31297 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31298 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31299 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31300 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31301 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31302 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31303 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31304 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31305 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31306 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31307 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31308 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31309 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31310 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31311 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31312 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31313 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31314 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31315 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31316 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31317 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31318 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31319 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31320 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31321 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31322 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31323 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31324 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31325 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31326 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31327 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31328 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31329 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31330 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31331 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31332 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31333 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31334 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31335 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31336 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31337 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31338 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31339 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31340 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31341 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31342 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31343 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31344 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31345 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31346 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31347 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31348 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31349 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31350 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31351 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31352 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31353 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31354 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31355 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31356 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31357 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31358 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31359 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31360 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31361 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31362 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31363 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31364 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31365 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31366 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31367 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31368 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31369 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31370 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31371 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31372 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31373 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31374 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31375 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31376 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31377 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31378 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31379 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31380 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31381 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31382 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31383 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31384 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31385 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31386 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31387 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31388 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31389 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31390 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31391 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31392 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31393 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31394 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31395 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31396 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31397 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31398 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31399 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31400 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31401 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31402 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31403 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31404 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31405 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31406 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31407 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31408 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31409 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31410 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31411 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31412 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31413 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31414 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31415 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31416 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31417 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31418 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31419 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31420 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31421 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31422 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31423 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31424 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31425 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31426 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31427 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31428 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31429 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31430 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31431 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31432 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31433 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31434 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31435 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31436 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31437 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31438 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31439 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31440 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31441 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31442 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31443 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31444 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31445 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31446 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31447 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31448 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31449 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31450 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31451 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31452 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31453 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31454 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31455 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31456 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31457 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31458 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31459 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31460 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31461 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31462 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31463 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31464 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31465 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31466 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31467 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31468 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31469 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31470 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31471 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31472 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31473 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31474 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31475 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31476 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31477 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31478 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31479 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31480 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31481 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31482 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31483 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31484 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31485 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31486 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31487 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31488 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31489 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31490 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31491 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31492 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31493 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31494 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31495 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31496 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31497 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31498 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31499 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31500 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31501 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31502 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31503 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31504 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31505 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31506 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31507 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31508 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31509 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31510 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31511 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31512 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31513 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31514 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31515 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31516 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31517 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31518 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31519 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31520 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31521 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31522 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31523 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31524 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31525 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31526 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31527 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31528 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31529 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31530 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31531 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31532 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31533 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31534 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31535 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31536 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31537 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31538 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31539 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31540 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31541 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31542 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31543 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31544 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31545 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31546 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31547 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31548 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31549 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31550 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31551 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31552 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31553 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31554 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31555 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31556 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31557 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31558 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31559 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31560 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31561 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31562 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31563 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31564 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31565 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31566 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31567 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31568 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31569 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31570 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31571 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31572 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31573 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31574 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31575 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31576 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31577 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31578 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31579 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31580 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31581 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31582 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31583 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31584 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31585 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31586 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31587 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31588 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31589 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31590 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31591 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31592 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31593 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31594 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31595 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31596 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31597 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31598 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31599 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31600 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31601 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31602 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31603 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31604 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31605 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31606 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31607 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31608 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31609 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31610 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31611 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31612 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31613 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31614 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31615 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31616 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31617 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31618 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31619 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31620 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31621 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31622 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31623 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31624 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31625 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31626 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31627 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31628 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31629 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31630 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31631 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31632 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31633 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31634 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31635 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31636 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31637 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31638 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31639 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31640 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31641 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31642 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31643 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31644 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31645 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31646 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31647 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31648 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31649 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31650 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31651 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31652 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31653 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31654 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31655 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31656 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31657 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31658 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31659 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31660 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31661 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31662 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31663 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31664 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31665 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31666 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31667 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31668 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31669 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31670 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31671 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31672 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31673 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31674 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31675 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31676 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31677 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31678 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31679 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31680 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31681 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31682 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31683 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31684 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31685 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31686 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31687 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31688 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31689 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31690 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31691 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31692 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31693 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31694 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31695 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31696 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31697 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31698 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31699 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31700 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31701 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31702 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31703 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31704 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31705 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31706 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31707 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31708 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31709 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31710 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31711 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31712 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31713 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31714 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31715 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31716 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31717 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31718 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31719 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31720 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31721 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31722 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31723 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31724 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31725 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31726 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31727 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31728 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31729 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31730 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31731 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31732 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31733 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31734 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31735 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31736 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31737 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31738 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31739 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31740 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31741 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31742 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31743 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31744 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31745 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31746 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31747 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31748 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31749 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31750 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31751 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31752 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31753 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31754 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31755 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31756 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31757 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31758 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31759 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31760 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31761 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31762 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31763 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31764 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31765 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31766 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31767 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31768 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31769 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31770 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31771 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31772 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31773 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31774 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31775 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31776 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31777 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31778 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31779 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31780 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31781 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31782 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31783 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31784 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31785 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31786 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31787 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31788 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31789 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31790 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31791 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31792 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31793 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31794 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31795 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31796 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31797 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31798 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31799 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31800 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31801 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31802 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31803 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31804 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31805 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31806 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31807 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31808 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31809 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31810 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31811 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31812 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31813 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31814 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31815 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31816 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31817 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31818 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31819 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31820 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31821 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31822 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31823 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray1()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31824 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31825 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31826 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31827 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31828 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31829 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31830 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31831 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31832 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31833 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31834 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31835 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31836 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31837 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31838 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31839 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31840 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31841 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31842 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31843 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31844 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31845 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31846 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31847 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31848 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31849 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31850 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31851 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31852 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31853 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31854 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31855 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31856 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31857 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31858 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31859 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31860 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31861 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31862 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31863 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31864 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31865 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31866 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31867 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31868 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31869 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31870 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31871 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31872 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31873 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31874 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31875 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31876 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31877 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31878 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31879 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31880 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31881 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31882 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31883 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31884 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31885 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31886 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31887 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31888 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31889 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31890 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31891 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31892 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31893 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31894 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31895 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31896 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31897 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31898 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31899 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31900 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31901 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31902 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31903 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31904 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31905 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31906 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31907 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31908 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31909 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31910 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31911 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31912 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31913 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31914 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31915 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31916 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31917 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31918 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31919 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31920 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31921 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31922 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31923 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31924 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31925 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31926 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31927 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31928 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31929 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31930 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31931 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31932 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31933 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31934 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31935 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31936 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31937 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31938 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31939 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31940 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31941 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31942 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31943 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31944 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31945 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31946 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31947 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31948 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31949 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31950 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31951 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31952 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31953 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31954 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31955 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31956 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31957 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31958 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31959 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31960 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31961 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31962 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31963 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31964 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31965 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31966 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31967 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31968 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31969 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31970 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31971 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31972 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31973 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31974 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31975 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31976 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31977 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31978 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31979 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31980 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31981 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31982 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31983 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31984 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31985 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31986 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31987 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31988 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31989 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31990 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31991 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31992 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31993 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31994 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31995 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31996 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31997 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			31998 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			31999 => [
				'validator'                => new IsInArrayValidator(
					Values::createMixedValuesArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
