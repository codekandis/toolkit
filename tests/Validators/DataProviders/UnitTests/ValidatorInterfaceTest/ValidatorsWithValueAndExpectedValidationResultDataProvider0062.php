<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringByFormatValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0062 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			62000 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62001 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62002 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62003 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62004 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62005 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62006 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62007 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62008 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62009 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62010 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62011 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62012 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62013 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62014 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62015 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62016 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			62017 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62018 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62019 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62020 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62021 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62022 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62023 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62024 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62025 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62026 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62027 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62028 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62029 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62030 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62031 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62032 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62033 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62034 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62035 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62036 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62037 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62038 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62039 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			62040 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62041 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62042 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62043 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62044 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62045 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			62046 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			62047 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			62048 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			62049 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62050 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62051 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62052 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62053 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62054 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62055 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62056 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62057 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62058 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62059 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62060 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62061 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62062 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62063 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62064 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62065 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62066 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62067 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62068 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62069 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62070 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62071 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62072 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62073 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62074 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62075 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62076 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62077 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62078 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62079 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62080 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62081 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62082 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62083 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62084 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62085 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62086 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62087 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62088 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62089 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62090 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62091 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62092 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62093 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62094 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62095 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62096 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62097 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62098 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62099 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62100 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62101 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62102 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62103 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62104 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62105 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62106 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62107 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62108 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62109 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62110 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62111 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62112 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62113 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62114 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62115 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62116 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62117 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62118 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62119 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62120 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62121 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62122 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62123 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62124 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62125 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62126 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62127 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62128 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62129 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62130 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62131 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62132 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62133 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62134 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62135 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62136 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62137 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62138 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62139 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62140 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62141 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62142 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62143 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62144 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62145 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62146 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62147 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62148 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62149 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62150 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62151 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62152 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62153 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62154 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62155 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62156 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62157 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62158 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62159 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62160 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62161 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62162 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62163 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62164 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62165 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62166 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62167 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62168 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62169 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62170 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62171 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62172 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62173 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62174 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62175 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62176 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62177 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62178 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62179 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62180 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62181 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62182 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62183 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62184 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62185 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62186 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62187 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62188 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62189 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62190 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62191 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62192 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			62193 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62194 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62195 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62196 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62197 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62198 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62199 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62200 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62201 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62202 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62203 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62204 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62205 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62206 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62207 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62208 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62209 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62210 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62211 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62212 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62213 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62214 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62215 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62216 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62217 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62218 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62219 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62220 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62221 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62222 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62223 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62224 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62225 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62226 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62227 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62228 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62229 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62230 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62231 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62232 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62233 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62234 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62235 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62236 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62237 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62238 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62239 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62240 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62241 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62242 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62243 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62244 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62245 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62246 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62247 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62248 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62249 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62250 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62251 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			62252 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62253 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62254 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62255 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62256 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62257 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62258 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62259 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62260 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62261 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62262 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62263 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62264 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62265 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62266 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62267 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62268 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62269 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62270 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62271 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62272 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62273 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62274 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62275 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62276 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62277 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62278 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62279 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62280 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62281 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62282 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62283 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62284 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62285 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62286 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62287 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62288 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62289 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62290 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62291 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62292 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62293 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62294 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62295 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62296 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62297 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62298 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62299 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62300 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62301 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62302 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62303 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62304 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62305 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62306 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62307 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62308 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62309 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62310 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62311 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62312 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62313 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62314 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62315 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62316 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62317 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62318 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62319 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62320 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62321 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62322 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62323 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62324 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62325 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62326 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62327 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62328 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62329 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62330 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62331 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62332 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62333 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62334 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62335 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62336 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62337 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62338 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62339 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62340 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62341 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62342 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62343 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62344 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62345 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62346 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62347 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62348 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62349 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62350 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62351 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62352 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62353 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62354 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62355 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62356 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62357 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62358 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62359 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62360 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62361 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62362 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62363 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62364 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62365 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62366 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62367 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62368 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62369 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62370 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62371 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62372 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62373 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62374 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62375 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62376 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62377 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62378 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62379 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62380 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62381 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62382 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62383 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62384 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62385 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62386 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62387 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62388 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62389 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62390 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62391 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62392 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62393 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62394 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62395 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62396 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62397 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62398 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62399 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62400 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			62401 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62402 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62403 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62404 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62405 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62406 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62407 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62408 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62409 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62410 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62411 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62412 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62413 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62414 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62415 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62416 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62417 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62418 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62419 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62420 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62421 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62422 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62423 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62424 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62425 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62426 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62427 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62428 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62429 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62430 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62431 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62432 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62433 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62434 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62435 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62436 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62437 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62438 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62439 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62440 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62441 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62442 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62443 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62444 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62445 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62446 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62447 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62448 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62449 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62450 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62451 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62452 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62453 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62454 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62455 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62456 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62457 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62458 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62459 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62460 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			62461 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62462 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62463 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62464 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62465 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62466 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62467 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62468 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62469 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62470 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62471 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62472 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62473 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62474 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62475 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62476 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62477 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62478 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62479 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62480 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62481 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62482 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62483 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62484 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62485 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62486 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62487 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62488 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62489 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62490 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62491 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62492 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62493 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62494 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62495 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62496 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62497 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62498 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62499 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62500 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62501 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62502 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62503 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62504 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62505 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62506 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62507 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62508 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62509 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62510 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62511 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62512 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62513 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62514 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62515 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62516 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62517 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62518 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62519 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62520 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62521 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62522 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62523 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62524 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62525 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62526 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62527 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62528 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62529 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62530 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62531 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62532 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62533 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62534 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62535 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62536 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62537 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62538 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62539 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62540 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62541 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62542 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62543 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62544 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62545 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62546 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62547 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62548 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62549 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62550 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62551 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62552 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62553 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62554 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62555 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62556 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62557 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62558 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62559 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62560 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62561 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62562 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62563 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62564 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62565 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62566 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62567 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62568 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62569 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62570 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62571 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62572 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62573 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62574 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62575 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62576 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62577 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62578 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62579 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62580 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62581 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62582 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62583 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62584 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62585 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62586 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62587 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62588 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62589 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62590 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62591 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62592 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62593 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62594 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62595 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62596 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62597 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62598 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62599 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62600 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62601 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62602 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62603 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62604 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62605 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62606 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62607 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator( Values::DATETIME_FORMAT_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62608 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			62609 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62610 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62611 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62612 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			62613 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62614 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62615 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62616 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62617 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62618 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62619 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62620 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62621 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62622 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62623 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62624 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62625 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62626 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62627 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62628 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62629 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62630 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62631 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62632 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62633 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62634 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62635 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62636 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62637 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62638 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			62639 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62640 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62641 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62642 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62643 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62644 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62645 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62646 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62647 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62648 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62649 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62650 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62651 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62652 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62653 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62654 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62655 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62656 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62657 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62658 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62659 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62660 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62661 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			62662 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62663 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62664 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62665 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62666 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62667 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			62668 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			62669 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62670 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62671 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62672 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62673 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62674 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62675 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62676 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62677 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62678 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62679 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62680 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62681 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62682 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62683 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62684 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62685 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62686 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62687 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62688 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62689 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62690 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62691 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62692 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62693 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62694 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62695 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62696 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62697 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62698 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62699 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62700 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62701 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62702 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62703 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62704 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62705 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62706 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62707 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62708 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62709 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62710 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62711 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62712 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62713 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62714 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62715 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62716 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62717 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62718 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62719 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62720 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62721 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62722 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62723 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62724 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62725 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62726 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62727 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62728 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62729 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62730 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62731 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62732 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62733 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62734 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62735 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62736 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62737 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62738 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62739 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62740 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62741 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62742 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62743 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62744 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62745 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62746 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62747 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62748 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62749 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62750 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62751 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62752 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62753 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62754 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62755 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62756 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62757 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62758 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62759 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62760 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62761 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62762 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62763 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62764 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62765 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62766 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62767 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62768 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62769 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62770 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62771 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62772 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62773 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62774 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62775 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62776 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62777 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62778 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62779 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62780 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62781 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62782 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62783 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62784 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62785 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62786 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62787 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62788 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62789 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62790 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62791 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62792 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62793 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62794 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62795 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62796 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62797 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62798 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62799 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62800 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62801 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62802 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62803 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62804 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62805 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62806 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62807 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62808 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62809 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62810 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62811 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62812 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62813 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62814 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62815 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62816 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			62817 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62818 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62819 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62820 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62821 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62822 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62823 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62824 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62825 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62826 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62827 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62828 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62829 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62830 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62831 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62832 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62833 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62834 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62835 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62836 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62837 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62838 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62839 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62840 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62841 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62842 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62843 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62844 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62845 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62846 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62847 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62848 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62849 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62850 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62851 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62852 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62853 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62854 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62855 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62856 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62857 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62858 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62859 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62860 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62861 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62862 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62863 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62864 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62865 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62866 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62867 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62868 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62869 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62870 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62871 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62872 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62873 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62874 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62875 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62876 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62877 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62878 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62879 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62880 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62881 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62882 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62883 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62884 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62885 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62886 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62887 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62888 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62889 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62890 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62891 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62892 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62893 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62894 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62895 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62896 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62897 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62898 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62899 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62900 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62901 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62902 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62903 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62904 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62905 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62906 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62907 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62908 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62909 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62910 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62911 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62912 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62913 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62914 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62915 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62916 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62917 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62918 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62919 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62920 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62921 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62922 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62923 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62924 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62925 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62926 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62927 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62928 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62929 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62930 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62931 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62932 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62933 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62934 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62935 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62936 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62937 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62938 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62939 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62940 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62941 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62942 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62943 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62944 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62945 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62946 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62947 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62948 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62949 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62950 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62951 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62952 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62953 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62954 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62955 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62956 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62957 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62958 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62959 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62960 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62961 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62962 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62963 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62964 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62965 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62966 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62967 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62968 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62969 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62970 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62971 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62972 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62973 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62974 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62975 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62976 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62977 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62978 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62979 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62980 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62981 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62982 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62983 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62984 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62985 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62986 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62987 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			62988 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			62989 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62990 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62991 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62992 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62993 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62994 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62995 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62996 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62997 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62998 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			62999 => [
				'validator'                => new NullableIsDateTimeValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
