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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0015 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			15000 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15001 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15002 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15003 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15004 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15005 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15006 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15007 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15008 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15009 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15010 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15011 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15012 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15013 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15014 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15015 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15016 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15017 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15018 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15019 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15020 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15021 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15022 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15023 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			15024 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			15025 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15026 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15027 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15028 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15029 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15030 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15031 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15032 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15033 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15034 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15035 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15036 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15037 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15038 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15039 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15040 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15041 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15042 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15043 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15044 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15045 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15046 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15047 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15048 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15049 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15050 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15051 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15052 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15053 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15054 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15055 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15056 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15057 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15058 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15059 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15060 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15061 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15062 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15063 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15064 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15065 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15066 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15067 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15068 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15069 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15070 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15071 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15072 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15073 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15074 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15075 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15076 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15077 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15078 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15079 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15080 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15081 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15082 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15083 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15084 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15085 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15086 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15087 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15088 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15089 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15090 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15091 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15092 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15093 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15094 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15095 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15096 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15097 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15098 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15099 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15100 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15101 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15102 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15103 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15104 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15105 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15106 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15107 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15108 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15109 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15110 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15111 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15112 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15113 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15114 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15115 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15116 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15117 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15118 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15119 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15120 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15121 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15122 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15123 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15124 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15125 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15126 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15127 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15128 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15129 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15130 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15131 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15132 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15133 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15134 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15135 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15136 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15137 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15138 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15139 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15140 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15141 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15142 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15143 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15144 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15145 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15146 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15147 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15148 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15149 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15150 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15151 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15152 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15153 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15154 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15155 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15156 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15157 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15158 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15159 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15160 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15161 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15162 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15163 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15164 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15165 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15166 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15167 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15168 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15169 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15170 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15171 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15172 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15173 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15174 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15175 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15176 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15177 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15178 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15179 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15180 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15181 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15182 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15183 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15184 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15185 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15186 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15187 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15188 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15189 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15190 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15191 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15192 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15193 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15194 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15195 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15196 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15197 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15198 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15199 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15200 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15201 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15202 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15203 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15204 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15205 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15206 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15207 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15208 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15209 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15210 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15211 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15212 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15213 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15214 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15215 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15216 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15217 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15218 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15219 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15220 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15221 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15222 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15223 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15224 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15225 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15226 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15227 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15228 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15229 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15230 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15231 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15232 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15233 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15234 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15235 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15236 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15237 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			15238 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15239 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15240 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15241 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15242 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15243 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15244 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15245 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15246 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15247 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15248 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15249 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15250 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15251 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15252 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15253 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15254 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15255 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15256 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15257 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15258 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15259 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15260 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15261 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15262 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15263 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15264 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15265 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15266 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15267 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15268 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15269 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15270 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15271 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15272 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15273 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15274 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15275 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15276 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15277 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15278 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15279 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15280 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15281 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15282 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15283 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15284 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15285 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15286 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15287 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15288 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15289 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15290 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15291 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15292 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15293 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15294 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15295 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15296 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15297 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15298 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15299 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15300 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15301 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15302 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15303 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15304 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15305 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15306 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15307 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15308 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15309 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15310 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15311 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15312 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15313 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15314 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15315 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15316 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15317 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15318 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15319 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15320 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15321 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15322 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15323 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15324 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15325 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15326 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15327 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15328 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15329 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15330 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15331 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15332 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15333 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15334 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15335 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15336 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15337 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15338 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15339 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15340 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15341 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15342 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15343 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15344 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15345 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15346 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15347 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15348 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15349 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15350 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15351 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15352 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15353 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15354 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15355 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15356 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15357 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15358 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15359 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15360 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15361 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15362 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15363 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15364 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15365 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15366 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15367 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15368 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15369 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15370 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15371 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15372 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15373 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15374 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15375 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15376 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15377 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15378 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15379 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15380 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15381 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15382 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15383 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15384 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15385 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15386 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15387 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15388 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15389 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15390 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15391 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15392 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15393 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15394 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15395 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15396 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15397 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15398 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15399 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15400 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15401 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15402 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15403 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15404 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15405 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15406 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15407 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15408 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15409 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15410 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15411 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15412 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15413 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15414 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15415 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15416 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15417 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15418 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15419 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15420 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15421 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15422 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15423 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15424 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15425 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15426 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15427 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15428 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15429 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15430 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15431 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15432 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15433 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15434 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15435 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15436 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15437 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15438 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15439 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15440 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15441 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15442 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15443 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15444 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15445 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15446 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			15447 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15448 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15449 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15450 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15451 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15452 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15453 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15454 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15455 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15456 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15457 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15458 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15459 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15460 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15461 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15462 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15463 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15464 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15465 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15466 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15467 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15468 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15469 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15470 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15471 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15472 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15473 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15474 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15475 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15476 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15477 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15478 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15479 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15480 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15481 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15482 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15483 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15484 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15485 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15486 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15487 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15488 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15489 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15490 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15491 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15492 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15493 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15494 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15495 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15496 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15497 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15498 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15499 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15500 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15501 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15502 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15503 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15504 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15505 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15506 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15507 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15508 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15509 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15510 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15511 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15512 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15513 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15514 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15515 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15516 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15517 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15518 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15519 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15520 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15521 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15522 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15523 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15524 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15525 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15526 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15527 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15528 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15529 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15530 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15531 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15532 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15533 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15534 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15535 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15536 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15537 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15538 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15539 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15540 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15541 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15542 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15543 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15544 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15545 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15546 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15547 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15548 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15549 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15550 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15551 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15552 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15553 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15554 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15555 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15556 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15557 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15558 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15559 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15560 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15561 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15562 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15563 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15564 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15565 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15566 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15567 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15568 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15569 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15570 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15571 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15572 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15573 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15574 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15575 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15576 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15577 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15578 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15579 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15580 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15581 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15582 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15583 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15584 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15585 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15586 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15587 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15588 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15589 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15590 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15591 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15592 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15593 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15594 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15595 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15596 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15597 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15598 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15599 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15600 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15601 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15602 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15603 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15604 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15605 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15606 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15607 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15608 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15609 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15610 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15611 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15612 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15613 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15614 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15615 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15616 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15617 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15618 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15619 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15620 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15621 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15622 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15623 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15624 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15625 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15626 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15627 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15628 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15629 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15630 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15631 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15632 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15633 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15634 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15635 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15636 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15637 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15638 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15639 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15640 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15641 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15642 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15643 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15644 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15645 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15646 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15647 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15648 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15649 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15650 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15651 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15652 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15653 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			15654 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			15655 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15656 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15657 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15658 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15659 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15660 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15661 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15662 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15663 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15664 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15665 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15666 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15667 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15668 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15669 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15670 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15671 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15672 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15673 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15674 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15675 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15676 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15677 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15678 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15679 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15680 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15681 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15682 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15683 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15684 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15685 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15686 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15687 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15688 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15689 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15690 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15691 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15692 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15693 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15694 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15695 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15696 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15697 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15698 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15699 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15700 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15701 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15702 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15703 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15704 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15705 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15706 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15707 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15708 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15709 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15710 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15711 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15712 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15713 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15714 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15715 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15716 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15717 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15718 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15719 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15720 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15721 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15722 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15723 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15724 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15725 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15726 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15727 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15728 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15729 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15730 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15731 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15732 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15733 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15734 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15735 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15736 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15737 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15738 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15739 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15740 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15741 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15742 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15743 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15744 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15745 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15746 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15747 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15748 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15749 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15750 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15751 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15752 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15753 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15754 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15755 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15756 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15757 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15758 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15759 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15760 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15761 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15762 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15763 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15764 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15765 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15766 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15767 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15768 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15769 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15770 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15771 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15772 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15773 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15774 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15775 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15776 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15777 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15778 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15779 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15780 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15781 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15782 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15783 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15784 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15785 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15786 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15787 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15788 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15789 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15790 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15791 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15792 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15793 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15794 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15795 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15796 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15797 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15798 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15799 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15800 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15801 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15802 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15803 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15804 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15805 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15806 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15807 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15808 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15809 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15810 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15811 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15812 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15813 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15814 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15815 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15816 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15817 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15818 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15819 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15820 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15821 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15822 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15823 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15824 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15825 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15826 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15827 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15828 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15829 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15830 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15831 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15832 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15833 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15834 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15835 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15836 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15837 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15838 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15839 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15840 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15841 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15842 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15843 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15844 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15845 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15846 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15847 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15848 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15849 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15850 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15851 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15852 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15853 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15854 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15855 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15856 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15857 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15858 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15859 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15860 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15861 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			15862 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			15863 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15864 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15865 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15866 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15867 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15868 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15869 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15870 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15871 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15872 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15873 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15874 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15875 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15876 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15877 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15878 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15879 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15880 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15881 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15882 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15883 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15884 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15885 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15886 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15887 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15888 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15889 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15890 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15891 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15892 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15893 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15894 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15895 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15896 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15897 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15898 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15899 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15900 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15901 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15902 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15903 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15904 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15905 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15906 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15907 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15908 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15909 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15910 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15911 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15912 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15913 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15914 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15915 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15916 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15917 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15918 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15919 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15920 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15921 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15922 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15923 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15924 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15925 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15926 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15927 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15928 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15929 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15930 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15931 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15932 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15933 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15934 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15935 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15936 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15937 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15938 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15939 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15940 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15941 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15942 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15943 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15944 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15945 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15946 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15947 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15948 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15949 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15950 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15951 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15952 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15953 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15954 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15955 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15956 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15957 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15958 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15959 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15960 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15961 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15962 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15963 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15964 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15965 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15966 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15967 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15968 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15969 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15970 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15971 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15972 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15973 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15974 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15975 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15976 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15977 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15978 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15979 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15980 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15981 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15982 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15983 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15984 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15985 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15986 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15987 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15988 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15989 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15990 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15991 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15992 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15993 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15994 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15995 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15996 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15997 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15998 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			15999 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
