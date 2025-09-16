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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0010 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			10000 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10001 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10002 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10003 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10004 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10005 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10006 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10007 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10008 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10009 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10010 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10011 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10012 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10013 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10014 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10015 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10016 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10017 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10018 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10019 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10020 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10021 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10022 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10023 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10024 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10025 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10026 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10027 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10028 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10029 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10030 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10031 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10032 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10033 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10034 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10035 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10036 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10037 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10038 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10039 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10040 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10041 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10042 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10043 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10044 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10045 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10046 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10047 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10048 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10049 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10050 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10051 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10052 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10053 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10054 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10055 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10056 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10057 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10058 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10059 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10060 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10061 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10062 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10063 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10064 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10065 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10066 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10067 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10068 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10069 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10070 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10071 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10072 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10073 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10074 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10075 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10076 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10077 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10078 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10079 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10080 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10081 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10082 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10083 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10084 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10085 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10086 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10087 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10088 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10089 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10090 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10091 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10092 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10093 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10094 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10095 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10096 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10097 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10098 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10099 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10100 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10101 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10102 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10103 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10104 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10105 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10106 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10107 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10108 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10109 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10110 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10111 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10112 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10113 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10114 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10115 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10116 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10117 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10118 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10119 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10120 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10121 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10122 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10123 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10124 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10125 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10126 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10127 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10128 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10129 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10130 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10131 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10132 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10133 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10134 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10135 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10136 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10137 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10138 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10139 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10140 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10141 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10142 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10143 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10144 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10145 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10146 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10147 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10148 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10149 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10150 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10151 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10152 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10153 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10154 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10155 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10156 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10157 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10158 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10159 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10160 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10161 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10162 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10163 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10164 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10165 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10166 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10167 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10168 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10169 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10170 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10171 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10172 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10173 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10174 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10175 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10176 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10177 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10178 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10179 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10180 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10181 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10182 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10183 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10184 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10185 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10186 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10187 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10188 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10189 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10190 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10191 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10192 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10193 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10194 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10195 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10196 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10197 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10198 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10199 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10200 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10201 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10202 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10203 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10204 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10205 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10206 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10207 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10208 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10209 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			10210 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10211 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10212 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10213 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10214 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10215 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10216 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10217 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10218 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10219 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10220 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10221 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10222 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10223 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10224 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10225 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10226 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10227 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10228 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10229 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10230 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10231 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10232 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10233 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10234 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10235 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10236 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10237 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10238 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10239 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10240 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10241 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10242 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10243 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10244 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10245 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10246 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10247 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10248 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10249 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10250 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10251 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10252 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10253 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10254 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10255 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10256 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10257 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10258 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10259 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10260 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10261 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10262 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10263 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10264 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10265 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10266 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10267 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10268 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10269 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10270 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10271 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10272 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10273 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10274 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10275 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10276 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10277 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10278 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10279 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10280 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10281 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10282 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10283 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10284 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10285 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10286 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10287 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10288 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10289 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10290 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10291 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10292 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10293 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10294 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10295 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10296 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10297 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10298 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10299 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10300 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10301 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10302 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10303 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10304 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10305 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10306 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10307 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10308 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10309 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10310 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10311 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10312 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10313 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10314 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10315 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10316 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10317 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10318 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10319 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10320 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10321 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10322 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10323 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10324 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10325 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10326 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10327 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10328 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10329 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10330 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10331 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10332 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10333 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10334 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10335 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10336 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10337 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10338 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10339 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10340 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10341 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10342 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10343 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10344 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10345 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10346 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10347 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10348 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10349 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10350 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10351 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10352 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10353 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10354 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10355 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10356 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10357 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10358 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10359 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10360 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10361 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10362 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10363 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10364 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10365 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10366 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10367 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10368 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10369 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10370 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10371 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10372 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10373 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10374 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10375 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10376 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10377 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10378 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10379 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10380 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10381 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10382 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10383 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10384 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10385 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10386 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10387 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10388 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10389 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10390 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10391 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10392 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10393 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10394 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10395 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10396 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10397 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10398 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10399 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10400 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10401 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10402 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10403 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10404 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10405 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10406 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10407 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10408 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10409 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10410 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10411 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10412 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10413 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10414 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10415 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10416 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10417 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10418 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			10419 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10420 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10421 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10422 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10423 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10424 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10425 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10426 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10427 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10428 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10429 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10430 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10431 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10432 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10433 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10434 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10435 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10436 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10437 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10438 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10439 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10440 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10441 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10442 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10443 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10444 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10445 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10446 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10447 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10448 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10449 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10450 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10451 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10452 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10453 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10454 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10455 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10456 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10457 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10458 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10459 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10460 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10461 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10462 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10463 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10464 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10465 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10466 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10467 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10468 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10469 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10470 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10471 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10472 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10473 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10474 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10475 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10476 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10477 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10478 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10479 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10480 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10481 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10482 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10483 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10484 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10485 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10486 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10487 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10488 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10489 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10490 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10491 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10492 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10493 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10494 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10495 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10496 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10497 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10498 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10499 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10500 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10501 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10502 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10503 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10504 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10505 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10506 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10507 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10508 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10509 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10510 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10511 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10512 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10513 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10514 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10515 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10516 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10517 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10518 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10519 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10520 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10521 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10522 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10523 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10524 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10525 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10526 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10527 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10528 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10529 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10530 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10531 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10532 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10533 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10534 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10535 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10536 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10537 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10538 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10539 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10540 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10541 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10542 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10543 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10544 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10545 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10546 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10547 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10548 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10549 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10550 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10551 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10552 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10553 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10554 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10555 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10556 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10557 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10558 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10559 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10560 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10561 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10562 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10563 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10564 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10565 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10566 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10567 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10568 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10569 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10570 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10571 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10572 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10573 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10574 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10575 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10576 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10577 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10578 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10579 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10580 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10581 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10582 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10583 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10584 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10585 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10586 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10587 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10588 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10589 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10590 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10591 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10592 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10593 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10594 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10595 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10596 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10597 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10598 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10599 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10600 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10601 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10602 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10603 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10604 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10605 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10606 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10607 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10608 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10609 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10610 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10611 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10612 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10613 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10614 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10615 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10616 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10617 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10618 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10619 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10620 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10621 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10622 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10623 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10624 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10625 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			10626 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			10627 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10628 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10629 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10630 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10631 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10632 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10633 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10634 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10635 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10636 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10637 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10638 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10639 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10640 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10641 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10642 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10643 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10644 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10645 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10646 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10647 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10648 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10649 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10650 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10651 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10652 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10653 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10654 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10655 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10656 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10657 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10658 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10659 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10660 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10661 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10662 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10663 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10664 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10665 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10666 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10667 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10668 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10669 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10670 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10671 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10672 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10673 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10674 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10675 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10676 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10677 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10678 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10679 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10680 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10681 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10682 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10683 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10684 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10685 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10686 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10687 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10688 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10689 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10690 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10691 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10692 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10693 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10694 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10695 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10696 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10697 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10698 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10699 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10700 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10701 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10702 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10703 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10704 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10705 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10706 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10707 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10708 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10709 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10710 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10711 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10712 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10713 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10714 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10715 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10716 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10717 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10718 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10719 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10720 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10721 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10722 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10723 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10724 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10725 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10726 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10727 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10728 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10729 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10730 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10731 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10732 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10733 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10734 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10735 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10736 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10737 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10738 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10739 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10740 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10741 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10742 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10743 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10744 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10745 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10746 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10747 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10748 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10749 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10750 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10751 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10752 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10753 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10754 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10755 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10756 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10757 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10758 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10759 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10760 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10761 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10762 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10763 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10764 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10765 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10766 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10767 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10768 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10769 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10770 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10771 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10772 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10773 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10774 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10775 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10776 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10777 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10778 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10779 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10780 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10781 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10782 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10783 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10784 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10785 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10786 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10787 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10788 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10789 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10790 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10791 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10792 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10793 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10794 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10795 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10796 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10797 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10798 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10799 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10800 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10801 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10802 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10803 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10804 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10805 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10806 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10807 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10808 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10809 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10810 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10811 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10812 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10813 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10814 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10815 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10816 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10817 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10818 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10819 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10820 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10821 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10822 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10823 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10824 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10825 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10826 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10827 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10828 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10829 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10830 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10831 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10832 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10833 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			10834 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			10835 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10836 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10837 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10838 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10839 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10840 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10841 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10842 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10843 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10844 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10845 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10846 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10847 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10848 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10849 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10850 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10851 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10852 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10853 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10854 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10855 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10856 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10857 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10858 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10859 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10860 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10861 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10862 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10863 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10864 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10865 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10866 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10867 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10868 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10869 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10870 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10871 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10872 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10873 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10874 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10875 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10876 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10877 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10878 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10879 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10880 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10881 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10882 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10883 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10884 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10885 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10886 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10887 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10888 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10889 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10890 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10891 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10892 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10893 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10894 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10895 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10896 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10897 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10898 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10899 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10900 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10901 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10902 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10903 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10904 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10905 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10906 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10907 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10908 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10909 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10910 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10911 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10912 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10913 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10914 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10915 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10916 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10917 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10918 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10919 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10920 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10921 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10922 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10923 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10924 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10925 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10926 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10927 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10928 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10929 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10930 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10931 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10932 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10933 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10934 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10935 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10936 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10937 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10938 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10939 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10940 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10941 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10942 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10943 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10944 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10945 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10946 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10947 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10948 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10949 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10950 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10951 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10952 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10953 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10954 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10955 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10956 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10957 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10958 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10959 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10960 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10961 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10962 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10963 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10964 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10965 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10966 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10967 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10968 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10969 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10970 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10971 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10972 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10973 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10974 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10975 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10976 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10977 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10978 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10979 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10980 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10981 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10982 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10983 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10984 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10985 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10986 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10987 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10988 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10989 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10990 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10991 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10992 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10993 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10994 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10995 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10996 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10997 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10998 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			10999 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
