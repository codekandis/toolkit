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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0009 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			9000 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9001 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9002 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9003 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9004 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9005 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9006 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9007 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9008 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9009 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9010 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9011 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9012 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9013 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9014 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9015 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9016 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9017 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9018 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9019 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9020 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9021 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9022 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9023 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9024 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9025 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9026 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9027 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9028 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9029 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9030 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9031 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9032 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9033 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9034 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9035 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9036 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9037 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9038 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9039 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9040 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9041 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9042 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9043 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9044 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9045 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9046 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9047 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9048 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9049 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9050 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9051 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9052 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9053 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9054 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9055 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9056 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9057 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9058 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9059 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9060 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9061 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9062 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9063 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9064 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9065 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9066 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9067 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9068 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9069 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9070 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9071 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9072 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9073 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9074 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9075 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9076 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9077 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9078 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9079 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9080 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9081 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9082 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9083 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9084 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9085 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9086 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9087 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9088 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9089 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9090 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9091 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9092 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9093 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9094 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9095 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9096 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9097 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9098 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9099 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9100 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9101 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9102 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9103 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9104 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9105 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9106 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9107 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9108 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9109 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9110 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9111 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9112 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9113 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9114 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9115 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9116 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9117 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9118 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9119 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9120 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9121 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9122 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9123 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9124 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9125 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9126 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9127 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9128 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9129 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9130 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9131 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9132 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9133 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9134 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9135 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9136 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9137 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9138 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9139 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9140 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9141 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9142 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9143 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9144 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9145 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9146 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9147 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9148 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9149 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9150 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9151 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9152 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9153 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9154 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9155 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9156 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9157 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			9158 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			9159 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9160 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9161 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9162 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9163 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9164 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9165 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9166 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9167 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9168 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9169 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9170 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9171 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9172 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9173 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9174 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9175 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9176 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9177 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9178 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9179 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9180 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9181 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9182 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9183 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9184 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9185 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9186 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9187 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9188 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9189 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9190 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9191 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9192 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9193 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9194 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9195 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9196 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9197 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9198 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9199 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9200 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9201 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9202 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9203 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9204 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9205 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9206 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9207 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9208 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9209 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9210 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9211 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9212 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9213 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9214 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9215 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9216 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9217 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9218 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9219 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9220 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9221 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9222 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9223 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9224 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9225 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9226 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9227 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9228 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9229 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9230 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9231 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9232 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9233 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9234 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9235 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9236 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9237 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9238 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9239 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9240 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9241 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9242 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9243 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9244 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9245 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9246 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9247 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9248 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9249 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9250 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9251 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9252 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9253 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9254 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9255 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9256 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9257 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9258 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9259 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9260 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9261 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9262 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9263 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9264 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9265 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9266 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9267 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9268 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9269 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9270 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9271 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9272 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9273 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9274 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9275 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9276 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9277 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9278 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9279 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9280 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9281 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9282 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9283 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9284 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9285 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9286 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9287 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9288 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9289 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9290 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9291 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9292 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9293 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9294 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9295 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9296 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9297 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9298 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9299 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9300 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9301 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9302 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9303 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9304 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9305 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9306 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9307 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9308 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9309 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9310 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9311 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9312 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9313 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9314 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9315 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9316 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9317 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9318 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9319 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9320 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9321 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9322 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9323 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9324 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9325 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9326 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9327 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9328 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9329 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9330 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9331 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9332 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9333 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9334 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9335 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9336 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9337 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9338 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9339 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9340 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9341 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9342 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9343 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9344 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9345 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9346 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9347 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9348 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9349 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9350 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9351 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9352 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9353 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9354 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9355 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9356 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9357 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9358 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9359 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9360 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9361 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9362 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9363 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9364 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9365 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9366 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9367 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9368 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9369 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9370 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9371 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			9372 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9373 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9374 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9375 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9376 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9377 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9378 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9379 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9380 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9381 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9382 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9383 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9384 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9385 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9386 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9387 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9388 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9389 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9390 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9391 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9392 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9393 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9394 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9395 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9396 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9397 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9398 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9399 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9400 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9401 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9402 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9403 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9404 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9405 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9406 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9407 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9408 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9409 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9410 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9411 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9412 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9413 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9414 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9415 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9416 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9417 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9418 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9419 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9420 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9421 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9422 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9423 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9424 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9425 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9426 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9427 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9428 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9429 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9430 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9431 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9432 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9433 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9434 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9435 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9436 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9437 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9438 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9439 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9440 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9441 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9442 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9443 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9444 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9445 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9446 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9447 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9448 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9449 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9450 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9451 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9452 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9453 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9454 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9455 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9456 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9457 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9458 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9459 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9460 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9461 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9462 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9463 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9464 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9465 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9466 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9467 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9468 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9469 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9470 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9471 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9472 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9473 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9474 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9475 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9476 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9477 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9478 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9479 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9480 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9481 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9482 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9483 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9484 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9485 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9486 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9487 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9488 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9489 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9490 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9491 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9492 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9493 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9494 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9495 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9496 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9497 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9498 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9499 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9500 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9501 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9502 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9503 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9504 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9505 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9506 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9507 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9508 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9509 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9510 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9511 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9512 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9513 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9514 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9515 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9516 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9517 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9518 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9519 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9520 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9521 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9522 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9523 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9524 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9525 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9526 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9527 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9528 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9529 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9530 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9531 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9532 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9533 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9534 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9535 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9536 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9537 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9538 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9539 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9540 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9541 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9542 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9543 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9544 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9545 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9546 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9547 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9548 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9549 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9550 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9551 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9552 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9553 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9554 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9555 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9556 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9557 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9558 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9559 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9560 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9561 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9562 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9563 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9564 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9565 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9566 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9567 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9568 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9569 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9570 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9571 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9572 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9573 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9574 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9575 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9576 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9577 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9578 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9579 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9580 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			9581 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9582 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9583 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9584 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9585 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9586 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9587 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9588 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9589 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9590 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9591 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9592 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9593 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9594 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9595 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9596 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9597 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9598 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9599 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9600 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9601 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9602 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9603 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9604 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9605 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9606 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9607 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9608 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9609 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9610 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9611 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9612 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9613 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9614 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9615 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9616 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9617 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9618 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9619 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9620 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9621 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9622 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9623 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9624 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9625 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9626 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9627 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9628 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9629 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9630 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9631 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9632 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9633 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9634 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9635 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9636 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9637 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9638 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9639 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9640 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9641 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9642 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9643 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9644 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9645 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9646 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9647 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9648 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9649 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9650 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9651 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9652 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9653 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9654 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9655 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9656 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9657 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9658 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9659 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9660 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9661 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9662 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9663 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9664 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9665 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9666 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9667 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9668 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9669 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9670 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9671 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9672 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9673 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9674 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9675 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9676 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9677 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9678 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9679 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9680 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9681 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9682 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9683 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9684 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9685 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9686 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9687 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9688 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9689 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9690 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9691 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9692 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9693 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9694 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9695 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9696 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9697 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9698 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9699 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9700 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9701 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9702 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9703 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9704 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9705 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9706 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9707 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9708 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9709 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9710 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9711 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9712 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9713 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9714 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9715 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9716 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9717 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9718 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9719 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9720 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9721 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9722 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9723 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9724 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9725 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9726 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9727 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9728 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9729 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9730 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9731 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9732 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9733 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9734 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9735 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9736 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9737 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9738 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9739 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9740 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9741 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9742 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9743 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9744 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9745 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9746 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9747 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9748 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9749 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9750 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9751 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9752 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9753 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9754 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9755 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9756 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9757 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9758 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9759 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9760 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9761 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9762 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9763 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9764 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9765 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9766 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9767 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9768 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9769 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9770 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9771 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9772 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9773 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9774 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9775 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9776 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9777 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9778 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9779 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9780 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9781 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9782 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9783 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9784 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9785 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9786 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9787 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			9788 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			9789 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9790 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9791 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9792 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9793 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9794 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9795 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9796 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9797 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9798 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9799 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9800 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9801 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9802 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9803 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9804 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9805 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9806 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9807 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9808 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9809 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9810 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9811 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9812 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9813 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9814 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9815 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9816 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9817 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9818 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9819 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9820 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9821 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9822 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9823 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9824 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9825 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9826 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9827 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9828 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9829 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9830 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9831 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9832 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9833 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9834 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9835 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9836 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9837 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9838 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9839 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9840 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9841 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9842 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9843 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9844 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9845 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9846 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9847 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9848 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9849 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9850 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9851 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9852 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9853 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9854 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9855 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9856 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9857 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9858 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9859 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9860 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9861 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9862 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9863 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9864 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9865 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9866 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9867 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9868 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9869 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9870 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9871 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9872 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9873 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9874 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9875 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9876 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9877 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9878 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9879 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9880 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9881 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9882 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9883 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9884 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9885 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9886 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9887 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9888 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9889 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9890 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9891 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9892 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9893 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9894 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9895 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9896 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9897 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9898 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9899 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9900 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9901 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9902 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9903 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9904 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9905 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9906 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9907 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9908 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9909 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9910 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9911 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9912 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9913 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9914 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9915 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9916 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9917 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9918 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9919 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9920 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9921 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9922 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9923 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9924 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9925 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9926 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9927 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9928 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9929 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9930 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9931 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9932 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9933 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9934 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9935 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9936 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9937 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9938 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9939 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9940 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9941 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9942 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9943 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9944 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9945 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9946 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9947 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9948 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9949 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9950 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9951 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9952 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9953 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9954 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9955 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9956 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9957 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9958 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9959 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9960 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9961 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9962 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9963 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9964 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9965 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9966 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9967 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9968 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9969 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9970 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9971 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9972 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9973 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9974 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9975 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9976 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9977 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9978 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9979 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9980 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9981 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9982 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9983 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9984 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9985 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9986 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9987 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9988 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9989 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9990 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9991 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9992 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9993 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9994 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9995 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			9996 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			9997 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9998 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			9999 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
