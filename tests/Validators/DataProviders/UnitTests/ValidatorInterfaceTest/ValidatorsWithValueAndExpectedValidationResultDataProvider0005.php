<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsDateTimeStringArrayByFormatValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringByFormatValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0005 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			5000 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5001 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5002 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5003 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5004 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5005 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5006 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5007 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5008 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5009 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5010 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5011 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5012 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5013 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5014 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5015 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5016 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5017 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5018 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5019 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5020 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5021 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5022 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5023 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5024 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5025 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5026 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5027 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5028 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5029 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5030 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5031 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5032 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5033 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5034 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5035 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5036 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5037 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5038 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5039 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5040 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5041 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5042 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5043 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5044 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5045 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5046 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5047 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5048 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5049 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5050 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5051 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5052 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5053 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			5054 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5055 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5056 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5057 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5058 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5059 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5060 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5061 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5062 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5063 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5064 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5065 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5066 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5067 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5068 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5069 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5070 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5071 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5072 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5073 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5074 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5075 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5076 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5077 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5078 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5079 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5080 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5081 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5082 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5083 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5084 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5085 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5086 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5087 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5088 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5089 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5090 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5091 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5092 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5093 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5094 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5095 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5096 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5097 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5098 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5099 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5100 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5101 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5102 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5103 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5104 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5105 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5106 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5107 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5108 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5109 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5110 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5111 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5112 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5113 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5114 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5115 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5116 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5117 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5118 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5119 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5120 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5121 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5122 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5123 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5124 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5125 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5126 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5127 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5128 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5129 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5130 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5131 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5132 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5133 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5134 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5135 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5136 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5137 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5138 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5139 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5140 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5141 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5142 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5143 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5144 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5145 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5146 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5147 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5148 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5149 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5150 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5151 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5152 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5153 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5154 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5155 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5156 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5157 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5158 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5159 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5160 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5161 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5162 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5163 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5164 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5165 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5166 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5167 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5168 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5169 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5170 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5171 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5172 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5173 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5174 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5175 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5176 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5177 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5178 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5179 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5180 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5181 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5182 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5183 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5184 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5185 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5186 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5187 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5188 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5189 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5190 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5191 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5192 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5193 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5194 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5195 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5196 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5197 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5198 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5199 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5200 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5201 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5202 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5203 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5204 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5205 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5206 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5207 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5208 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5209 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5210 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5211 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5212 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5213 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5214 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5215 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5216 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5217 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5218 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5219 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5220 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5221 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5222 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5223 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5224 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5225 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5226 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5227 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5228 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5229 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5230 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5231 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5232 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5233 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5234 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5235 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5236 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5237 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5238 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5239 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5240 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5241 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5242 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5243 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5244 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5245 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5246 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5247 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5248 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5249 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5250 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5251 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5252 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5253 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5254 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5255 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5256 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5257 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5258 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5259 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5260 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5261 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5262 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			5263 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5264 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5265 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5266 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5267 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5268 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5269 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5270 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5271 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5272 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5273 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5274 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5275 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5276 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5277 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5278 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5279 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5280 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5281 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5282 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5283 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5284 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5285 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5286 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5287 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5288 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5289 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5290 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5291 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5292 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5293 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5294 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5295 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5296 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5297 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5298 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5299 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5300 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5301 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5302 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5303 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5304 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5305 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5306 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5307 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5308 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5309 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5310 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5311 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5312 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5313 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5314 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5315 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5316 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5317 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5318 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5319 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5320 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5321 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5322 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5323 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5324 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5325 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5326 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5327 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5328 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5329 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5330 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5331 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5332 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5333 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5334 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5335 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5336 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5337 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5338 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5339 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5340 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5341 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5342 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5343 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5344 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5345 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5346 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5347 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5348 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5349 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5350 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5351 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5352 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5353 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5354 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5355 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5356 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5357 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5358 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5359 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5360 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5361 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5362 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5363 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5364 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5365 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5366 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5367 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5368 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5369 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5370 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5371 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5372 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5373 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5374 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5375 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5376 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5377 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5378 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5379 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5380 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5381 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5382 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5383 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5384 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5385 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5386 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5387 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5388 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5389 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5390 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5391 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5392 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5393 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5394 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5395 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5396 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5397 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5398 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5399 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5400 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5401 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5402 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5403 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5404 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5405 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5406 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5407 => [
				'validator'                => new IsDateTimeStringArrayByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5408 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5409 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5410 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5411 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5412 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5413 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5414 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5415 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5416 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5417 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5418 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5419 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5420 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5421 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5422 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5423 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5424 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5425 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5426 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5427 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5428 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5429 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5430 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5431 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5432 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5433 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5434 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5435 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5436 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5437 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5438 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5439 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5440 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			5441 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5442 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5443 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5444 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5445 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5446 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5447 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5448 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5449 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5450 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5451 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5452 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5453 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5454 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5455 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5456 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5457 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5458 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5459 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5460 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5461 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5462 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5463 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			5464 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5465 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5466 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5467 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5468 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5469 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			5470 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			5471 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			5472 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			5473 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5474 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5475 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5476 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5477 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5478 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5479 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5480 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5481 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5482 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5483 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5484 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5485 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5486 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5487 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5488 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5489 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5490 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5491 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5492 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5493 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5494 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5495 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5496 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5497 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5498 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5499 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5500 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5501 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5502 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5503 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5504 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5505 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5506 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5507 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5508 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5509 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5510 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5511 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5512 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5513 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5514 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5515 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5516 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5517 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5518 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5519 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5520 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5521 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5522 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5523 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5524 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5525 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5526 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5527 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5528 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5529 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5530 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5531 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5532 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5533 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5534 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5535 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5536 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5537 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5538 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5539 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5540 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5541 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5542 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5543 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5544 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5545 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5546 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5547 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5548 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5549 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5550 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5551 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5552 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5553 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5554 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5555 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5556 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5557 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5558 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5559 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5560 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5561 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5562 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5563 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5564 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5565 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5566 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5567 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5568 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5569 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5570 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5571 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5572 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5573 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5574 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5575 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5576 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5577 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5578 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5579 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5580 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5581 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5582 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5583 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5584 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5585 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5586 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5587 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5588 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5589 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5590 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5591 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5592 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5593 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5594 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5595 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5596 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5597 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5598 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5599 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5600 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5601 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5602 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5603 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5604 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5605 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5606 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5607 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5608 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5609 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5610 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5611 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5612 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5613 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5614 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5615 => [
				'validator'                => new IsDateTimeStringArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5616 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5617 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5618 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5619 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5620 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5621 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5622 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5623 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5624 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5625 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5626 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5627 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5628 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5629 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5630 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5631 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5632 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5633 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5634 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5635 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5636 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5637 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5638 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5639 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5640 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5641 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5642 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5643 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5644 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5645 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5646 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5647 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5648 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5649 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5650 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5651 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5652 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5653 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5654 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5655 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5656 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5657 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5658 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5659 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5660 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5661 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5662 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5663 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5664 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5665 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5666 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5667 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5668 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5669 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5670 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5671 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5672 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5673 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5674 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5675 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			5676 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5677 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5678 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5679 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5680 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5681 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5682 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5683 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5684 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5685 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5686 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5687 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5688 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5689 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5690 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5691 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5692 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5693 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5694 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5695 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5696 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5697 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5698 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5699 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5700 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5701 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5702 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5703 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5704 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5705 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5706 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5707 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5708 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5709 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5710 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5711 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5712 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5713 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5714 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5715 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5716 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5717 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5718 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5719 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5720 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5721 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5722 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5723 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5724 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5725 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5726 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5727 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5728 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5729 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5730 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5731 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5732 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5733 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5734 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5735 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5736 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5737 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5738 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5739 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5740 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5741 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5742 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5743 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5744 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5745 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5746 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5747 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5748 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5749 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5750 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5751 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5752 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5753 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5754 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5755 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5756 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5757 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5758 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5759 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5760 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5761 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5762 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5763 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5764 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5765 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5766 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5767 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5768 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5769 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5770 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5771 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5772 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5773 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5774 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5775 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5776 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5777 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5778 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5779 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5780 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5781 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5782 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5783 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5784 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5785 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5786 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5787 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5788 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5789 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5790 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5791 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5792 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5793 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5794 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5795 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5796 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5797 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5798 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5799 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5800 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5801 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5802 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5803 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5804 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5805 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5806 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5807 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5808 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5809 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5810 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5811 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5812 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5813 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5814 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5815 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5816 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5817 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5818 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5819 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5820 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5821 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5822 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5823 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5824 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5825 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5826 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5827 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5828 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5829 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5830 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5831 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5832 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5833 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5834 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5835 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5836 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5837 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5838 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5839 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5840 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5841 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5842 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5843 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5844 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5845 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5846 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5847 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5848 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5849 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5850 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5851 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5852 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5853 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5854 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5855 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5856 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5857 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5858 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5859 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5860 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5861 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5862 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5863 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5864 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5865 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5866 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5867 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5868 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5869 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5870 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5871 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5872 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5873 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5874 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5875 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5876 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5877 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5878 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5879 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5880 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5881 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5882 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5883 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5884 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			5885 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5886 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5887 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5888 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5889 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5890 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5891 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5892 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5893 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5894 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5895 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5896 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5897 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5898 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5899 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5900 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5901 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5902 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5903 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5904 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5905 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5906 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5907 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5908 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5909 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5910 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5911 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5912 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5913 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5914 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5915 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5916 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5917 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5918 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5919 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5920 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5921 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5922 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5923 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5924 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5925 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5926 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5927 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5928 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5929 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5930 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5931 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5932 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5933 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5934 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5935 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5936 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5937 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5938 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5939 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5940 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5941 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5942 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5943 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5944 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5945 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5946 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5947 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5948 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5949 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5950 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5951 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5952 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5953 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5954 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5955 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5956 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5957 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5958 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5959 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5960 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5961 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5962 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5963 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5964 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5965 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5966 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5967 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5968 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5969 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5970 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5971 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5972 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5973 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5974 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5975 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5976 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5977 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5978 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5979 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5980 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5981 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5982 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5983 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5984 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5985 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5986 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5987 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5988 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5989 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5990 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5991 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5992 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5993 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5994 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5995 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5996 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5997 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5998 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			5999 => [
				'validator'                => new IsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
