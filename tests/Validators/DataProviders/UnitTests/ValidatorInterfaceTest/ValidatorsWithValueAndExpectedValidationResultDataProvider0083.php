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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0083 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			83000 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83001 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83002 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83003 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83004 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83005 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83006 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83007 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83008 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83009 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83010 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83011 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83012 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83013 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83014 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83015 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83016 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83017 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83018 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83019 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83020 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83021 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83022 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83023 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83024 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83025 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83026 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83027 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83028 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83029 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83030 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83031 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83032 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83033 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83034 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83035 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83036 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83037 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83038 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83039 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83040 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83041 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83042 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83043 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83044 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83045 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83046 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83047 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83048 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83049 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83050 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83051 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83052 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83053 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83054 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83055 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83056 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83057 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83058 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83059 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83060 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83061 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83062 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83063 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83064 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83065 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83066 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83067 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83068 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83069 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83070 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83071 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83072 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83073 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83074 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83075 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83076 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83077 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83078 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83079 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83080 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83081 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83082 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83083 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83084 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83085 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83086 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83087 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83088 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83089 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83090 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83091 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83092 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83093 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83094 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83095 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83096 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83097 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83098 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83099 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83100 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83101 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83102 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83103 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83104 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83105 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83106 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83107 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83108 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83109 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83110 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83111 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83112 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83113 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83114 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83115 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83116 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83117 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83118 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83119 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83120 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83121 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83122 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83123 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83124 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83125 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83126 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83127 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83128 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83129 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83130 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83131 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83132 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83133 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83134 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83135 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83136 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83137 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83138 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83139 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83140 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83141 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83142 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83143 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83144 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83145 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83146 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83147 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83148 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83149 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83150 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83151 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83152 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83153 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83154 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83155 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83156 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83157 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83158 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83159 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83160 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83161 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83162 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83163 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83164 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83165 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83166 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83167 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83168 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83169 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83170 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83171 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83172 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83173 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83174 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83175 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83176 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83177 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83178 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83179 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83180 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83181 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83182 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83183 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83184 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83185 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83186 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83187 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83188 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83189 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83190 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83191 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83192 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83193 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83194 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83195 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83196 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83197 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83198 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83199 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83200 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83201 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83202 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83203 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83204 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83205 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83206 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83207 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83208 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83209 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83210 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83211 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83212 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83213 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83214 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83215 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83216 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83217 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83218 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83219 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83220 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83221 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83222 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83223 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83224 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83225 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83226 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83227 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83228 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83229 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83230 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83231 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83232 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83233 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83234 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83235 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83236 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83237 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83238 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83239 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83240 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83241 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83242 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83243 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83244 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83245 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83246 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83247 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83248 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83249 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83250 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83251 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83252 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83253 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83254 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83255 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83256 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83257 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83258 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83259 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83260 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83261 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83262 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83263 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83264 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83265 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83266 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83267 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83268 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83269 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83270 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83271 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83272 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83273 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83274 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83275 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83276 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83277 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83278 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83279 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83280 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83281 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83282 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83283 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83284 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83285 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83286 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83287 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83288 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83289 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83290 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83291 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83292 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83293 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83294 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83295 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83296 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83297 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83298 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83299 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83300 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83301 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83302 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83303 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83304 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83305 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83306 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83307 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83308 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83309 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83310 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83311 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83312 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83313 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83314 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83315 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83316 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83317 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83318 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83319 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83320 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83321 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83322 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83323 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83324 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83325 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83326 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83327 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83328 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83329 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83330 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83331 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83332 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83333 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83334 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83335 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83336 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83337 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83338 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83339 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83340 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83341 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83342 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83343 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83344 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83345 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83346 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83347 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83348 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83349 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83350 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83351 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83352 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83353 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83354 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83355 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83356 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83357 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83358 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83359 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83360 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83361 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83362 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83363 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83364 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83365 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83366 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83367 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83368 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83369 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83370 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83371 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83372 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83373 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83374 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83375 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83376 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83377 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83378 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83379 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83380 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83381 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83382 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83383 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83384 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83385 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83386 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83387 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83388 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83389 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83390 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83391 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83392 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83393 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83394 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83395 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83396 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83397 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83398 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83399 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83400 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83401 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83402 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83403 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83404 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83405 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83406 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83407 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83408 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83409 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83410 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83411 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83412 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83413 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83414 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83415 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83416 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83417 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83418 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83419 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83420 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83421 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83422 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83423 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83424 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83425 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83426 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83427 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83428 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83429 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83430 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83431 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83432 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83433 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83434 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83435 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83436 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83437 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83438 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83439 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83440 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83441 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83442 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83443 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83444 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83445 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83446 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83447 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83448 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83449 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83450 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83451 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83452 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83453 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83454 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83455 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83456 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83457 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83458 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83459 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83460 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83461 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83462 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83463 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83464 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83465 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83466 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83467 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83468 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83469 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83470 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83471 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83472 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83473 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83474 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83475 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83476 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83477 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83478 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83479 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83480 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83481 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83482 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83483 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83484 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83485 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83486 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83487 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83488 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83489 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83490 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83491 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83492 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83493 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83494 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83495 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83496 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83497 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83498 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83499 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83500 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83501 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83502 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83503 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83504 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83505 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83506 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83507 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83508 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83509 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83510 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83511 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83512 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83513 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83514 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83515 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83516 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83517 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83518 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83519 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83520 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83521 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83522 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83523 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83524 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83525 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83526 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83527 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83528 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83529 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83530 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83531 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83532 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83533 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83534 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83535 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83536 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83537 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83538 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83539 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83540 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83541 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83542 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83543 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83544 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83545 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83546 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83547 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83548 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83549 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83550 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83551 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83552 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83553 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83554 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83555 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83556 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83557 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83558 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83559 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83560 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83561 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83562 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83563 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83564 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83565 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83566 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83567 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83568 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83569 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83570 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83571 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83572 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83573 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83574 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83575 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83576 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83577 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83578 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83579 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83580 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83581 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83582 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83583 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83584 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83585 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83586 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83587 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83588 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83589 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83590 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83591 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83592 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83593 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83594 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83595 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83596 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83597 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83598 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83599 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83600 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83601 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83602 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83603 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83604 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83605 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83606 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83607 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83608 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83609 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83610 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83611 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83612 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83613 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83614 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83615 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83616 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83617 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83618 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83619 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83620 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83621 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83622 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83623 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83624 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83625 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83626 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83627 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83628 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83629 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83630 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83631 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83632 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83633 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83634 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83635 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83636 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83637 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83638 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83639 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83640 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83641 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83642 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83643 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83644 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83645 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83646 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83647 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83648 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83649 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83650 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83651 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83652 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83653 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83654 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83655 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83656 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83657 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83658 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83659 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83660 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83661 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83662 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83663 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83664 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83665 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83666 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83667 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83668 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83669 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83670 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83671 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83672 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83673 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83674 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83675 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83676 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83677 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83678 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83679 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83680 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83681 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83682 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83683 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83684 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83685 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83686 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83687 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83688 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83689 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83690 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83691 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83692 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83693 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83694 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83695 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83696 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83697 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83698 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83699 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83700 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83701 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83702 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83703 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83704 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83705 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83706 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83707 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83708 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83709 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83710 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83711 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83712 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83713 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83714 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83715 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83716 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83717 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83718 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83719 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83720 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83721 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83722 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83723 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83724 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83725 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83726 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83727 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83728 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83729 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83730 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83731 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83732 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83733 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83734 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83735 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83736 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83737 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83738 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83739 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83740 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83741 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83742 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83743 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83744 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83745 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83746 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83747 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83748 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83749 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83750 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83751 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83752 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83753 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83754 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83755 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83756 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83757 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83758 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83759 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83760 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83761 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83762 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83763 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83764 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83765 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83766 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83767 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83768 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83769 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83770 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83771 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83772 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83773 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83774 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83775 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83776 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83777 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83778 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83779 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83780 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83781 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83782 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83783 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83784 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83785 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83786 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83787 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83788 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83789 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83790 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83791 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83792 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83793 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83794 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83795 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83796 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83797 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83798 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83799 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83800 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83801 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83802 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83803 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83804 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83805 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83806 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83807 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83808 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83809 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83810 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83811 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83812 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83813 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83814 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83815 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83816 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83817 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83818 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83819 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83820 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83821 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83822 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83823 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83824 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83825 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83826 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83827 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83828 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83829 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83830 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83831 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83832 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83833 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83834 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83835 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83836 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83837 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83838 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83839 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83840 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83841 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83842 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83843 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83844 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83845 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83846 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83847 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83848 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83849 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83850 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83851 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83852 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83853 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83854 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83855 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83856 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83857 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83858 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83859 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83860 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83861 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83862 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83863 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83864 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83865 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83866 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83867 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83868 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83869 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83870 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83871 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83872 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83873 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83874 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83875 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83876 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83877 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83878 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83879 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83880 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83881 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83882 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83883 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83884 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83885 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83886 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83887 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83888 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83889 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83890 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83891 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83892 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83893 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83894 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83895 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83896 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83897 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83898 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83899 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83900 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83901 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83902 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83903 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83904 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83905 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83906 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83907 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83908 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83909 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83910 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83911 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83912 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83913 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83914 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83915 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83916 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83917 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83918 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83919 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83920 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83921 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83922 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83923 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83924 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83925 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83926 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83927 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83928 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83929 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83930 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83931 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83932 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83933 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83934 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83935 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83936 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83937 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83938 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83939 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83940 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83941 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83942 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83943 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83944 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83945 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83946 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83947 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83948 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83949 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83950 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83951 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83952 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83953 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83954 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83955 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83956 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83957 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83958 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83959 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83960 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83961 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83962 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83963 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			83964 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83965 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83966 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83967 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83968 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83969 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83970 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83971 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83972 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83973 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83974 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83975 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83976 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83977 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83978 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83979 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83980 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83981 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83982 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83983 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83984 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83985 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83986 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83987 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83988 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83989 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83990 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83991 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83992 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83993 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83994 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83995 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83996 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83997 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83998 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			83999 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
