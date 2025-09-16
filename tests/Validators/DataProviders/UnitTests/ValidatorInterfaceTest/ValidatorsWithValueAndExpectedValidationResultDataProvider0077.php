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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0077 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			77000 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77001 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77002 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77003 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77004 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77005 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77006 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77007 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77008 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77009 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77010 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77011 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77012 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77013 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77014 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77015 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77016 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77017 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77018 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77019 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77020 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77021 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77022 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77023 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77024 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77025 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77026 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77027 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77028 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77029 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77030 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77031 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77032 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77033 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77034 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77035 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77036 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77037 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77038 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77039 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77040 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77041 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77042 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77043 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77044 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77045 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77046 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77047 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77048 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77049 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77050 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77051 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77052 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			77053 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77054 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77055 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77056 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77057 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77058 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77059 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77060 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77061 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77062 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77063 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77064 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77065 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77066 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77067 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77068 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77069 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77070 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77071 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77072 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77073 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77074 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77075 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77076 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77077 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77078 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77079 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77080 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77081 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77082 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77083 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77084 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77085 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77086 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77087 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77088 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77089 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77090 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77091 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77092 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77093 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77094 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77095 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77096 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77097 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77098 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77099 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77100 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77101 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77102 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77103 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77104 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77105 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77106 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77107 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77108 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77109 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77110 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77111 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77112 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77113 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77114 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77115 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77116 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77117 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77118 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77119 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77120 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77121 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77122 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77123 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77124 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77125 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77126 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77127 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77128 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77129 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77130 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77131 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77132 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77133 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77134 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77135 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77136 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77137 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77138 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77139 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77140 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77141 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77142 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77143 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77144 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77145 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77146 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77147 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77148 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77149 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77150 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77151 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77152 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77153 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77154 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77155 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77156 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77157 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77158 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77159 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77160 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77161 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77162 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77163 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77164 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77165 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77166 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77167 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77168 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			77169 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77170 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77171 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77172 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77173 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77174 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77175 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77176 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77177 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77178 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77179 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77180 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77181 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77182 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77183 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77184 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77185 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77186 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77187 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77188 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77189 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77190 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77191 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77192 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77193 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77194 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77195 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77196 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77197 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77198 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77199 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77200 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77201 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77202 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77203 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77204 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77205 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77206 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77207 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77208 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77209 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77210 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77211 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77212 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77213 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77214 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77215 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77216 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77217 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77218 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77219 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77220 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77221 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77222 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77223 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77224 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77225 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77226 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77227 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77228 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77229 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77230 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77231 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77232 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77233 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77234 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77235 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77236 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77237 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77238 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77239 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77240 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77241 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77242 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77243 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77244 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77245 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77246 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77247 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77248 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77249 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77250 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77251 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77252 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77253 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77254 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77255 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77256 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77257 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77258 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77259 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			77260 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			77261 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77262 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77263 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77264 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77265 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77266 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77267 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77268 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77269 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77270 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77271 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77272 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77273 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77274 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77275 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77276 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77277 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77278 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77279 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77280 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77281 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77282 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77283 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77284 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77285 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77286 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77287 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77288 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77289 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77290 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77291 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77292 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77293 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77294 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77295 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77296 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77297 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77298 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77299 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77300 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77301 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77302 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77303 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77304 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77305 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77306 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77307 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77308 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77309 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77310 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77311 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77312 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77313 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77314 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77315 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77316 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77317 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77318 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77319 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77320 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77321 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77322 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77323 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77324 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77325 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77326 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77327 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77328 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77329 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77330 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77331 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77332 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77333 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77334 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77335 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77336 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77337 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77338 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77339 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77340 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77341 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77342 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77343 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77344 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77345 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77346 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77347 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77348 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77349 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77350 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77351 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77352 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77353 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77354 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77355 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77356 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77357 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77358 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77359 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77360 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77361 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77362 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77363 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77364 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77365 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77366 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77367 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77368 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77369 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77370 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77371 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77372 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77373 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77374 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77375 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77376 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			77377 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77378 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77379 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77380 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77381 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77382 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77383 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77384 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77385 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77386 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77387 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77388 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77389 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77390 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77391 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77392 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77393 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77394 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77395 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77396 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77397 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77398 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77399 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77400 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77401 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77402 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77403 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77404 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77405 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77406 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77407 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77408 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77409 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77410 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77411 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77412 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77413 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77414 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77415 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77416 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77417 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77418 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77419 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77420 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77421 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77422 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77423 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77424 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77425 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77426 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77427 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77428 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77429 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77430 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77431 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77432 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77433 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77434 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77435 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77436 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77437 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77438 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77439 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77440 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77441 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77442 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77443 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77444 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77445 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77446 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77447 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77448 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77449 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77450 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77451 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77452 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77453 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77454 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77455 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77456 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77457 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77458 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77459 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77460 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77461 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77462 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77463 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77464 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77465 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77466 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77467 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			77468 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			77469 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77470 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77471 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77472 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77473 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77474 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77475 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77476 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77477 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77478 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77479 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77480 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77481 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77482 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77483 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77484 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77485 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77486 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77487 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77488 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77489 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77490 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77491 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77492 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77493 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77494 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77495 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77496 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77497 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77498 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77499 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77500 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77501 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77502 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77503 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77504 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77505 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77506 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77507 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77508 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77509 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77510 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77511 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77512 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77513 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77514 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77515 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77516 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77517 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77518 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77519 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77520 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77521 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77522 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77523 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77524 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77525 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77526 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77527 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77528 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77529 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77530 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77531 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77532 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77533 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77534 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77535 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77536 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77537 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77538 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77539 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77540 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77541 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77542 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77543 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77544 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77545 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77546 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77547 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77548 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77549 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77550 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77551 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77552 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77553 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77554 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77555 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77556 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77557 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77558 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77559 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77560 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77561 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77562 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77563 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77564 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77565 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77566 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77567 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77568 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77569 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77570 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77571 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77572 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77573 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77574 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77575 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77576 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77577 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77578 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77579 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77580 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77581 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77582 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77583 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77584 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			77585 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77586 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77587 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77588 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77589 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77590 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77591 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77592 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77593 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77594 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77595 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77596 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77597 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77598 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77599 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77600 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77601 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77602 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77603 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77604 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77605 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77606 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77607 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77608 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77609 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77610 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77611 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77612 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77613 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77614 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77615 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77616 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77617 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77618 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77619 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77620 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77621 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77622 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77623 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77624 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77625 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77626 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77627 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77628 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77629 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77630 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77631 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77632 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77633 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77634 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77635 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77636 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77637 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77638 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77639 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77640 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77641 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77642 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77643 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77644 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77645 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77646 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77647 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77648 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77649 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77650 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77651 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77652 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77653 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77654 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77655 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77656 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77657 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77658 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77659 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77660 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77661 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77662 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77663 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77664 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77665 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77666 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77667 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77668 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77669 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77670 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77671 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77672 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77673 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77674 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77675 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77676 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77677 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77678 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77679 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77680 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77681 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			77682 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77683 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77684 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77685 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77686 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77687 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77688 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77689 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77690 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77691 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77692 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77693 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77694 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77695 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77696 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77697 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77698 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77699 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77700 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77701 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77702 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77703 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77704 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77705 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77706 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77707 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77708 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77709 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77710 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77711 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77712 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77713 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77714 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77715 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77716 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77717 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77718 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77719 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77720 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77721 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77722 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77723 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77724 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77725 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77726 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77727 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77728 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77729 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77730 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77731 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77732 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77733 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77734 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77735 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77736 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77737 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77738 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77739 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77740 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77741 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77742 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77743 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77744 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77745 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77746 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77747 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77748 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77749 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77750 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77751 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77752 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77753 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77754 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77755 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77756 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77757 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77758 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77759 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77760 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77761 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77762 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77763 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77764 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77765 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77766 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77767 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77768 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77769 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77770 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77771 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77772 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77773 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77774 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77775 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77776 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77777 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77778 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77779 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77780 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77781 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77782 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77783 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77784 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77785 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77786 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77787 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77788 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77789 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77790 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77791 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77792 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			77793 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77794 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77795 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77796 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77797 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77798 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77799 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77800 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77801 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77802 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77803 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77804 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77805 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77806 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77807 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77808 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77809 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77810 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77811 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77812 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77813 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77814 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77815 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77816 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77817 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77818 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77819 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77820 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77821 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77822 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77823 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77824 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77825 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77826 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77827 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77828 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77829 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77830 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77831 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77832 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77833 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77834 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77835 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77836 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77837 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77838 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77839 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77840 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77841 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77842 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77843 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77844 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77845 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77846 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77847 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77848 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77849 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77850 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77851 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77852 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77853 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77854 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77855 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77856 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77857 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77858 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77859 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77860 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77861 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77862 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77863 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77864 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77865 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77866 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77867 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77868 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77869 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77870 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77871 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77872 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77873 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77874 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77875 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77876 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77877 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77878 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77879 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77880 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77881 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77882 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77883 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77884 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77885 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77886 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77887 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77888 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77889 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77890 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			77891 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77892 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77893 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77894 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77895 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77896 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77897 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77898 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77899 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77900 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77901 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77902 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77903 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77904 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77905 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77906 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77907 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77908 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77909 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77910 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77911 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77912 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77913 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77914 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77915 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77916 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77917 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77918 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77919 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77920 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77921 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77922 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77923 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77924 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77925 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77926 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77927 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77928 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77929 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77930 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77931 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77932 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77933 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77934 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77935 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77936 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77937 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77938 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77939 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77940 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77941 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77942 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77943 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77944 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77945 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77946 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77947 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77948 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77949 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77950 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77951 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77952 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77953 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77954 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77955 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77956 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77957 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77958 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77959 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77960 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77961 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77962 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77963 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77964 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77965 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77966 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77967 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77968 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77969 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77970 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77971 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77972 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77973 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77974 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77975 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77976 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77977 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77978 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77979 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77980 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77981 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77982 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77983 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77984 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77985 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77986 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77987 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77988 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77989 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77990 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77991 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77992 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77993 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77994 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77995 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77996 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77997 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77998 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			77999 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
