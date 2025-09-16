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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0020 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			20000 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20001 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20002 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20003 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20004 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20005 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20006 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20007 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20008 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20009 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20010 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20011 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20012 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20013 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20014 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20015 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20016 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20017 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20018 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20019 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20020 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20021 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20022 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20023 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20024 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20025 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20026 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20027 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20028 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20029 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20030 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20031 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20032 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20033 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20034 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20035 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20036 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20037 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20038 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20039 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20040 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20041 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20042 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20043 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20044 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20045 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20046 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20047 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20048 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20049 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20050 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20051 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20052 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20053 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			20054 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			20055 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20056 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20057 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20058 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20059 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20060 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20061 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20062 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20063 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20064 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20065 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20066 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20067 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20068 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20069 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20070 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20071 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20072 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20073 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20074 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20075 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20076 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20077 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20078 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20079 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20080 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20081 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20082 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20083 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20084 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20085 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20086 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20087 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20088 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20089 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20090 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20091 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20092 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20093 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20094 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20095 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20096 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20097 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20098 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20099 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20100 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20101 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20102 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20103 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20104 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20105 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20106 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20107 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20108 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20109 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20110 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20111 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20112 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20113 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20114 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20115 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20116 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20117 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20118 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20119 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20120 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20121 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20122 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20123 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20124 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20125 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20126 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20127 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20128 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20129 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20130 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20131 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20132 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20133 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20134 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20135 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20136 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20137 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20138 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20139 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20140 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20141 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20142 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20143 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20144 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20145 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20146 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20147 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20148 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20149 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20150 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20151 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20152 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20153 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20154 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20155 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20156 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20157 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20158 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20159 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20160 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20161 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20162 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20163 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20164 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20165 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20166 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20167 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20168 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20169 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20170 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20171 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20172 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20173 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20174 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20175 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20176 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20177 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20178 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20179 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20180 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20181 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20182 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20183 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20184 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20185 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20186 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20187 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20188 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20189 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20190 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20191 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20192 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20193 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20194 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20195 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20196 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20197 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20198 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20199 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20200 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20201 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20202 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20203 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20204 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20205 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20206 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20207 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20208 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20209 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20210 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20211 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20212 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20213 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20214 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20215 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20216 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20217 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20218 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20219 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20220 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20221 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20222 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20223 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20224 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20225 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20226 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20227 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20228 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20229 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20230 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20231 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20232 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20233 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20234 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20235 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20236 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20237 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20238 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20239 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20240 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20241 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20242 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20243 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20244 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20245 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20246 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20247 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20248 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20249 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20250 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20251 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20252 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20253 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20254 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20255 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20256 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20257 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20258 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20259 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20260 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20261 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20262 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20263 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20264 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20265 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20266 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20267 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			20268 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20269 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20270 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20271 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20272 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20273 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20274 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20275 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20276 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20277 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20278 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20279 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20280 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20281 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20282 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20283 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20284 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20285 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20286 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20287 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20288 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20289 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20290 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20291 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20292 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20293 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20294 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20295 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20296 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20297 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20298 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20299 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20300 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20301 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20302 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20303 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20304 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20305 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20306 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20307 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20308 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20309 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20310 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20311 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20312 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20313 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20314 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20315 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20316 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20317 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20318 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20319 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20320 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20321 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20322 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20323 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20324 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20325 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20326 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20327 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20328 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20329 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20330 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20331 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20332 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20333 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20334 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20335 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20336 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20337 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20338 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20339 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20340 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20341 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20342 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20343 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20344 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20345 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20346 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20347 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20348 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20349 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20350 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20351 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20352 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20353 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20354 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20355 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20356 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20357 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20358 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20359 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20360 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20361 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20362 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20363 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20364 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20365 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20366 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20367 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20368 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20369 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20370 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20371 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20372 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20373 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20374 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20375 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20376 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20377 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20378 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20379 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20380 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20381 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20382 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20383 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20384 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20385 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20386 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20387 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20388 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20389 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20390 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20391 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20392 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20393 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20394 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20395 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20396 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20397 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20398 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20399 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20400 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20401 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20402 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20403 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20404 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20405 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20406 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20407 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20408 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20409 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20410 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20411 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20412 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20413 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20414 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20415 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20416 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20417 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20418 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20419 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20420 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20421 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20422 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20423 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20424 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20425 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20426 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20427 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20428 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20429 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20430 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20431 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20432 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20433 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20434 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20435 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20436 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20437 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20438 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20439 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20440 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20441 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20442 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20443 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20444 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20445 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20446 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20447 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20448 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20449 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20450 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20451 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20452 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20453 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20454 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20455 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20456 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20457 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20458 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20459 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20460 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20461 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20462 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20463 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20464 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20465 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20466 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20467 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20468 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20469 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20470 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20471 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20472 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20473 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20474 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20475 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20476 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			20477 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20478 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20479 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20480 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20481 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20482 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20483 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20484 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20485 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20486 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20487 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20488 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20489 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20490 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20491 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20492 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20493 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20494 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20495 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20496 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20497 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20498 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20499 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20500 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20501 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20502 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20503 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20504 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20505 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20506 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20507 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20508 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20509 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20510 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20511 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20512 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20513 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20514 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20515 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20516 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20517 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20518 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20519 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20520 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20521 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20522 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20523 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20524 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20525 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20526 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20527 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20528 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20529 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20530 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20531 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20532 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20533 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20534 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20535 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20536 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20537 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20538 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20539 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20540 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20541 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20542 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20543 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20544 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20545 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20546 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20547 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20548 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20549 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20550 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20551 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20552 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20553 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20554 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20555 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20556 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20557 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20558 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20559 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20560 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20561 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20562 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20563 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20564 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20565 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20566 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20567 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20568 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20569 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20570 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20571 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20572 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20573 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20574 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20575 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20576 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20577 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20578 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20579 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20580 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20581 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20582 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20583 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20584 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20585 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20586 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20587 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20588 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20589 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20590 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20591 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20592 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20593 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20594 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20595 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20596 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20597 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20598 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20599 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20600 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20601 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20602 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20603 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20604 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20605 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20606 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20607 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20608 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20609 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20610 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20611 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20612 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20613 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20614 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20615 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20616 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20617 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20618 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20619 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20620 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20621 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20622 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20623 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20624 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20625 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20626 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20627 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20628 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20629 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20630 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20631 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20632 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20633 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20634 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20635 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20636 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20637 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20638 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20639 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20640 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20641 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20642 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20643 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20644 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20645 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20646 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20647 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20648 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20649 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20650 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20651 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20652 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20653 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20654 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20655 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20656 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20657 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20658 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20659 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20660 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20661 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20662 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20663 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20664 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20665 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20666 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20667 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20668 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20669 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20670 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20671 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20672 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20673 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20674 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20675 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20676 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20677 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20678 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20679 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20680 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20681 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20682 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20683 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			20684 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			20685 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20686 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20687 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20688 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20689 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20690 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20691 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20692 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20693 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20694 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20695 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20696 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20697 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20698 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20699 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20700 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20701 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20702 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20703 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20704 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20705 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20706 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20707 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20708 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20709 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20710 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20711 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20712 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20713 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20714 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20715 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20716 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20717 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20718 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20719 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20720 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20721 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20722 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20723 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20724 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20725 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20726 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20727 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20728 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20729 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20730 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20731 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20732 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20733 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20734 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20735 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20736 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20737 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20738 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20739 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20740 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20741 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20742 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20743 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20744 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20745 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20746 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20747 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20748 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20749 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20750 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20751 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20752 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20753 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20754 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20755 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20756 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20757 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20758 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20759 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20760 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20761 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20762 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20763 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20764 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20765 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20766 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20767 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20768 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20769 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20770 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20771 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20772 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20773 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20774 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20775 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20776 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20777 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20778 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20779 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20780 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20781 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20782 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20783 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20784 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20785 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20786 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20787 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20788 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20789 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20790 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20791 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20792 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20793 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20794 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20795 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20796 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20797 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20798 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20799 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20800 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20801 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20802 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20803 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20804 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20805 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20806 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20807 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20808 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20809 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20810 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20811 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20812 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20813 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20814 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20815 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20816 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20817 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20818 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20819 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20820 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20821 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20822 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20823 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20824 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20825 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20826 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20827 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20828 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20829 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20830 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20831 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20832 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20833 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20834 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20835 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20836 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20837 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20838 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20839 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20840 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20841 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20842 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20843 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20844 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20845 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20846 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20847 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20848 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20849 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20850 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20851 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20852 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20853 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20854 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20855 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20856 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20857 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20858 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20859 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20860 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20861 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20862 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20863 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20864 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20865 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20866 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20867 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20868 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20869 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20870 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20871 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20872 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20873 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20874 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20875 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20876 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20877 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20878 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20879 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20880 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20881 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20882 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20883 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20884 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20885 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20886 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20887 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20888 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20889 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20890 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20891 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			20892 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			20893 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20894 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20895 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20896 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20897 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20898 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20899 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20900 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20901 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20902 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20903 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20904 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20905 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20906 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20907 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20908 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20909 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20910 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20911 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20912 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20913 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20914 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20915 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20916 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20917 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20918 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20919 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20920 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20921 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20922 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20923 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20924 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20925 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20926 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20927 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20928 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20929 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20930 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20931 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20932 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20933 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20934 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20935 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20936 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20937 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20938 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20939 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20940 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20941 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20942 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20943 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20944 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20945 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20946 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20947 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20948 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20949 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20950 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20951 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20952 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20953 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20954 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20955 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20956 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20957 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20958 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20959 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20960 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20961 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20962 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20963 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20964 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20965 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20966 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20967 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20968 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20969 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20970 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20971 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20972 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20973 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20974 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20975 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20976 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20977 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20978 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20979 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20980 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20981 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20982 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20983 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20984 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20985 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20986 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20987 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20988 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20989 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20990 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20991 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20992 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20993 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20994 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20995 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20996 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20997 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20998 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			20999 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
