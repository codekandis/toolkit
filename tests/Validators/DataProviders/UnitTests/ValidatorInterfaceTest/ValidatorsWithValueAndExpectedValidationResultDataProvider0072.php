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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0072 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			72000 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72001 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72002 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72003 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72004 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72005 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72006 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72007 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72008 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72009 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72010 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72011 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72012 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72013 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72014 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72015 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72016 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72017 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72018 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72019 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72020 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72021 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72022 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			72023 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72024 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72025 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72026 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72027 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72028 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72029 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72030 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72031 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72032 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72033 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72034 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72035 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72036 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72037 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72038 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72039 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72040 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72041 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72042 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72043 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72044 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72045 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72046 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72047 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72048 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72049 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72050 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72051 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72052 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72053 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72054 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72055 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72056 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72057 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72058 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72059 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72060 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72061 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72062 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72063 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72064 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72065 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72066 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72067 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72068 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72069 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72070 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72071 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72072 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72073 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72074 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72075 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72076 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72077 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72078 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72079 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72080 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72081 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72082 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72083 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72084 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72085 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72086 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72087 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72088 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72089 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72090 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72091 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72092 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72093 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72094 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72095 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72096 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72097 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72098 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72099 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72100 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72101 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72102 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72103 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72104 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72105 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72106 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72107 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72108 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72109 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72110 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72111 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72112 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72113 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72114 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72115 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72116 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72117 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72118 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72119 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72120 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72121 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72122 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72123 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72124 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72125 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72126 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72127 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72128 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72129 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72130 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72131 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72132 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72133 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72134 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72135 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72136 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72137 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72138 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72139 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72140 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72141 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72142 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72143 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72144 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72145 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72146 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72147 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72148 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72149 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72150 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72151 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72152 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72153 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72154 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72155 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72156 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72157 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72158 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72159 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72160 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72161 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72162 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72163 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72164 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72165 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72166 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72167 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72168 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72169 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72170 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72171 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72172 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72173 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72174 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72175 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72176 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			72177 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72178 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72179 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72180 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72181 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72182 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72183 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72184 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72185 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72186 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72187 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72188 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72189 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72190 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72191 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72192 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72193 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72194 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72195 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72196 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72197 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72198 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72199 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72200 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72201 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72202 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72203 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72204 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72205 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72206 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72207 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72208 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72209 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72210 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72211 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72212 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72213 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72214 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72215 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72216 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72217 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72218 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72219 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72220 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72221 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72222 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72223 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72224 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72225 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72226 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72227 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72228 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72229 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			72230 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			72231 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72232 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72233 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72234 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72235 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72236 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72237 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72238 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72239 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72240 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72241 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72242 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72243 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72244 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72245 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72246 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72247 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72248 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72249 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72250 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72251 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72252 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72253 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72254 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72255 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72256 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72257 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72258 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72259 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72260 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72261 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72262 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72263 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72264 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72265 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72266 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72267 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72268 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72269 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72270 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72271 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72272 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72273 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72274 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72275 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72276 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72277 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72278 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72279 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72280 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72281 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72282 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72283 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72284 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72285 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72286 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72287 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72288 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72289 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72290 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72291 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72292 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72293 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72294 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72295 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72296 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72297 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72298 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72299 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72300 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72301 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72302 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72303 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72304 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72305 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72306 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72307 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72308 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72309 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72310 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72311 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72312 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72313 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72314 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72315 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72316 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72317 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72318 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72319 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72320 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72321 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72322 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72323 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72324 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72325 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72326 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72327 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72328 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72329 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72330 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72331 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72332 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72333 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72334 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72335 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72336 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72337 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72338 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72339 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72340 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72341 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72342 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72343 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72344 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72345 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72346 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72347 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72348 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72349 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72350 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72351 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72352 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72353 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72354 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72355 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72356 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72357 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72358 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72359 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72360 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72361 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72362 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72363 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72364 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72365 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72366 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72367 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72368 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72369 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72370 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72371 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72372 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72373 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72374 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72375 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72376 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72377 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72378 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72379 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72380 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72381 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72382 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72383 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72384 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			72385 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72386 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72387 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72388 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72389 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72390 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72391 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72392 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72393 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72394 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72395 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72396 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72397 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72398 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72399 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72400 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72401 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72402 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72403 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72404 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72405 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72406 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72407 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72408 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72409 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72410 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72411 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72412 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72413 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72414 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72415 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72416 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72417 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72418 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72419 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72420 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72421 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72422 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72423 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72424 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72425 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72426 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72427 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72428 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72429 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72430 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72431 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72432 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72433 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72434 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72435 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72436 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72437 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			72438 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			72439 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72440 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72441 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72442 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72443 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72444 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72445 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72446 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72447 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72448 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72449 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72450 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72451 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72452 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72453 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72454 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72455 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72456 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72457 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72458 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72459 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72460 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72461 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72462 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72463 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72464 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72465 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72466 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72467 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72468 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72469 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72470 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72471 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72472 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72473 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72474 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72475 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72476 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72477 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72478 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72479 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72480 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72481 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72482 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72483 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72484 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72485 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72486 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72487 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72488 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72489 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72490 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72491 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72492 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72493 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72494 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72495 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72496 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72497 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72498 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72499 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72500 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72501 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72502 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72503 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72504 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72505 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72506 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72507 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72508 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72509 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72510 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72511 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72512 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72513 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72514 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72515 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72516 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72517 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72518 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72519 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72520 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72521 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72522 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72523 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72524 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72525 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72526 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72527 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72528 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72529 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72530 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72531 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72532 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72533 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72534 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72535 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72536 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72537 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72538 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72539 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72540 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72541 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72542 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72543 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72544 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72545 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72546 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72547 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72548 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72549 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72550 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72551 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72552 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72553 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72554 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72555 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72556 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72557 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72558 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72559 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72560 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72561 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72562 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72563 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72564 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72565 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72566 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72567 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72568 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72569 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72570 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72571 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72572 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72573 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72574 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72575 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72576 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72577 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72578 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72579 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72580 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72581 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72582 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72583 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72584 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72585 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72586 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72587 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72588 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72589 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72590 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72591 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72592 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			72593 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72594 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72595 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72596 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72597 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72598 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72599 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72600 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72601 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72602 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72603 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72604 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72605 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72606 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72607 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72608 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72609 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72610 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72611 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72612 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72613 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72614 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72615 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72616 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72617 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72618 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72619 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72620 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72621 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72622 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72623 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72624 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72625 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72626 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72627 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72628 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72629 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72630 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72631 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72632 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72633 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72634 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72635 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72636 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72637 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72638 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72639 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72640 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72641 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72642 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72643 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72644 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72645 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72646 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72647 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72648 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72649 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72650 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72651 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			72652 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72653 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72654 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72655 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72656 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72657 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72658 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72659 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72660 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72661 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72662 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72663 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72664 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72665 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72666 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72667 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72668 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72669 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72670 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72671 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72672 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72673 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72674 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72675 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72676 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72677 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72678 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72679 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72680 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72681 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72682 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72683 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72684 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72685 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72686 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72687 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72688 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72689 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72690 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72691 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72692 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72693 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72694 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72695 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72696 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72697 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72698 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72699 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72700 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72701 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72702 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72703 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72704 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72705 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72706 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72707 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72708 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72709 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72710 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72711 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72712 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72713 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72714 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72715 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72716 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72717 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72718 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72719 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72720 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72721 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72722 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72723 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72724 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72725 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72726 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72727 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72728 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72729 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72730 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72731 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72732 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72733 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72734 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72735 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72736 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72737 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72738 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72739 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72740 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72741 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72742 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72743 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72744 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72745 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72746 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72747 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72748 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72749 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72750 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72751 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72752 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72753 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72754 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72755 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72756 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72757 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72758 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72759 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72760 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72761 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72762 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72763 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72764 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72765 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72766 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72767 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72768 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72769 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72770 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72771 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72772 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72773 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72774 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72775 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72776 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72777 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72778 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72779 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72780 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72781 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72782 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72783 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72784 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72785 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72786 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72787 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72788 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72789 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72790 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72791 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72792 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72793 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72794 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72795 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72796 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72797 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72798 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72799 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72800 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			72801 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72802 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72803 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72804 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72805 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72806 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72807 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72808 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72809 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72810 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72811 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72812 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72813 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72814 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72815 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72816 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72817 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72818 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72819 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72820 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72821 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72822 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72823 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72824 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72825 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72826 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72827 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72828 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72829 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72830 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72831 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72832 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72833 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72834 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72835 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72836 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72837 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72838 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72839 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72840 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72841 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72842 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72843 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72844 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72845 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72846 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72847 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72848 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72849 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72850 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72851 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72852 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72853 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72854 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72855 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72856 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72857 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72858 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72859 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72860 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			72861 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72862 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72863 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72864 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72865 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72866 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72867 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72868 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72869 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72870 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72871 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72872 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72873 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72874 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72875 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72876 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72877 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72878 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72879 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72880 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72881 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72882 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72883 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72884 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72885 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72886 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72887 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72888 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72889 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72890 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72891 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72892 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72893 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72894 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72895 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72896 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72897 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72898 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72899 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72900 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72901 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72902 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72903 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72904 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72905 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72906 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72907 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72908 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72909 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72910 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72911 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72912 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72913 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72914 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72915 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72916 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72917 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72918 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72919 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72920 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72921 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72922 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72923 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72924 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72925 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72926 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72927 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72928 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72929 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72930 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72931 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72932 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72933 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72934 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72935 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72936 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72937 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72938 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72939 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72940 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72941 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72942 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72943 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72944 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72945 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72946 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72947 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72948 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72949 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72950 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72951 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72952 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72953 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72954 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72955 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72956 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72957 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72958 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72959 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72960 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72961 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72962 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72963 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72964 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72965 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72966 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72967 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72968 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72969 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72970 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72971 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72972 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72973 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72974 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72975 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72976 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72977 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72978 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72979 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72980 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72981 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72982 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72983 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72984 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72985 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72986 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72987 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72988 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72989 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72990 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72991 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72992 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72993 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72994 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72995 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72996 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72997 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72998 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			72999 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
