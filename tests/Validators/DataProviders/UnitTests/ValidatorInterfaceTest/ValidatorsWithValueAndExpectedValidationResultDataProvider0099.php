<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\NullableIsInstanceOfValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0099 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			99000 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99001 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99002 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99003 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99004 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99005 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99006 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99007 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99008 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99009 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99010 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99011 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99012 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99013 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99014 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99015 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99016 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99017 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99018 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99019 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99020 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99021 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99022 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99023 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99024 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99025 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99026 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99027 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99028 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99029 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99030 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99031 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99032 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99033 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99034 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99035 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99036 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99037 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99038 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99039 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99040 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99041 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99042 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99043 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99044 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99045 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99046 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99047 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99048 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99049 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99050 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99051 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99052 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99053 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99054 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99055 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99056 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99057 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99058 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99059 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99060 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99061 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99062 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99063 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99064 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99065 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99066 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99067 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99068 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99069 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99070 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99071 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99072 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99073 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99074 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99075 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99076 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99077 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99078 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99079 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99080 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99081 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99082 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99083 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99084 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99085 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99086 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99087 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99088 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99089 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99090 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99091 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99092 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99093 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99094 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99095 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99096 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99097 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99098 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99099 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99100 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99101 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99102 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99103 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99104 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99105 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99106 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99107 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99108 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99109 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99110 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99111 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99112 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99113 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99114 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99115 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99116 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99117 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99118 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99119 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99120 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99121 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99122 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99123 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99124 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99125 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99126 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99127 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99128 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99129 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99130 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99131 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99132 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99133 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99134 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99135 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99136 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99137 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99138 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99139 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99140 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99141 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99142 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99143 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99144 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99145 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99146 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99147 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99148 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99149 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99150 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99151 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99152 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99153 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99154 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99155 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99156 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99157 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99158 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99159 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99160 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99161 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99162 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99163 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99164 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99165 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99166 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99167 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99168 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99169 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99170 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99171 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99172 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99173 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99174 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99175 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99176 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99177 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99178 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99179 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99180 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99181 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99182 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99183 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99184 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99185 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99186 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99187 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99188 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99189 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99190 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99191 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99192 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99193 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99194 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99195 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99196 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99197 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99198 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99199 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99200 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99201 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99202 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99203 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99204 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99205 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99206 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99207 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99208 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99209 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99210 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99211 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99212 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99213 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99214 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99215 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99216 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99217 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99218 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99219 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99220 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99221 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99222 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99223 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99224 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99225 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99226 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99227 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99228 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99229 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99230 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99231 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99232 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99233 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99234 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99235 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99236 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99237 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99238 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99239 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99240 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99241 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99242 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99243 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99244 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99245 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99246 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99247 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99248 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99249 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99250 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99251 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99252 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99253 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99254 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99255 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99256 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99257 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99258 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99259 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99260 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99261 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99262 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99263 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99264 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99265 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99266 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99267 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99268 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99269 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99270 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99271 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99272 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99273 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99274 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99275 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99276 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99277 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99278 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99279 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99280 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99281 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99282 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99283 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99284 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99285 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99286 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99287 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99288 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99289 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99290 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99291 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99292 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99293 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99294 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99295 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99296 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99297 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99298 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99299 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99300 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99301 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99302 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99303 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99304 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99305 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99306 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99307 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99308 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99309 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99310 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99311 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99312 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99313 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99314 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99315 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99316 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99317 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99318 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99319 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99320 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99321 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99322 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99323 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99324 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99325 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99326 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99327 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99328 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99329 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99330 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99331 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99332 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99333 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99334 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99335 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99336 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99337 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99338 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99339 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99340 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99341 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99342 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99343 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99344 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99345 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99346 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99347 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99348 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99349 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99350 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99351 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99352 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99353 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99354 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99355 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99356 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99357 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99358 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99359 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99360 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99361 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99362 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99363 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99364 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99365 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99366 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99367 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99368 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99369 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99370 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99371 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99372 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99373 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99374 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99375 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99376 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99377 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99378 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99379 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99380 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99381 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99382 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99383 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99384 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99385 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99386 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99387 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99388 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99389 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99390 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99391 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99392 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99393 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99394 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99395 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99396 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99397 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99398 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99399 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99400 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99401 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99402 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99403 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99404 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99405 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99406 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99407 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99408 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99409 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99410 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99411 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99412 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99413 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99414 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99415 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99416 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99417 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99418 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99419 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99420 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99421 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99422 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99423 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99424 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99425 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99426 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99427 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99428 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99429 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99430 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99431 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99432 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99433 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99434 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99435 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99436 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99437 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99438 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99439 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99440 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99441 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99442 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99443 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99444 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99445 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99446 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99447 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99448 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99449 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99450 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99451 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99452 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99453 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99454 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99455 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99456 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99457 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99458 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99459 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99460 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99461 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99462 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99463 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99464 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99465 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99466 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99467 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99468 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99469 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99470 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99471 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99472 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99473 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99474 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99475 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99476 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99477 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99478 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99479 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99480 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99481 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99482 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99483 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99484 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99485 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99486 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99487 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99488 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99489 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99490 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99491 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99492 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99493 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99494 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99495 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99496 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99497 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99498 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99499 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99500 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99501 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99502 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99503 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99504 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99505 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99506 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99507 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99508 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99509 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99510 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99511 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99512 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99513 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99514 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99515 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99516 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99517 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99518 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99519 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99520 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99521 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99522 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99523 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99524 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99525 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99526 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99527 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99528 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99529 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99530 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99531 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99532 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99533 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99534 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99535 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99536 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99537 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99538 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99539 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99540 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99541 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99542 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99543 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99544 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99545 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99546 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99547 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99548 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99549 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99550 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99551 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99552 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99553 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99554 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99555 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99556 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99557 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99558 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99559 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99560 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99561 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99562 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99563 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99564 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99565 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99566 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99567 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99568 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99569 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99570 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99571 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99572 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99573 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99574 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99575 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99576 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99577 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99578 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99579 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99580 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99581 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99582 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99583 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99584 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99585 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99586 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99587 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99588 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99589 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99590 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99591 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99592 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99593 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99594 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99595 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99596 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99597 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99598 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99599 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99600 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99601 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99602 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99603 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99604 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99605 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99606 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99607 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99608 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99609 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99610 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99611 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99612 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99613 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99614 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99615 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99616 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99617 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99618 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99619 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99620 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99621 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99622 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99623 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99624 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99625 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99626 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99627 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99628 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99629 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99630 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99631 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99632 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99633 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99634 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99635 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99636 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99637 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99638 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99639 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99640 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99641 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99642 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99643 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99644 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99645 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99646 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99647 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99648 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99649 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99650 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99651 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99652 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99653 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99654 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99655 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99656 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99657 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99658 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99659 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99660 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99661 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99662 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99663 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99664 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99665 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99666 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99667 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99668 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99669 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99670 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99671 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99672 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99673 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99674 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99675 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99676 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99677 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99678 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99679 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99680 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99681 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99682 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99683 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99684 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99685 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99686 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99687 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99688 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99689 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99690 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99691 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99692 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99693 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99694 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99695 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99696 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99697 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99698 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99699 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99700 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99701 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99702 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99703 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99704 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99705 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99706 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99707 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99708 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99709 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99710 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99711 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99712 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99713 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99714 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99715 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99716 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99717 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99718 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99719 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99720 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99721 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99722 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99723 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99724 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99725 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99726 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99727 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99728 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99729 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99730 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99731 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99732 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99733 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99734 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99735 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99736 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99737 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99738 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99739 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99740 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99741 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99742 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99743 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99744 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99745 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99746 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99747 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99748 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99749 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99750 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99751 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99752 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99753 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99754 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99755 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99756 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99757 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99758 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99759 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99760 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99761 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99762 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99763 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99764 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99765 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99766 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99767 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99768 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99769 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99770 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99771 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99772 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99773 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99774 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99775 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99776 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99777 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99778 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99779 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99780 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99781 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99782 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99783 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99784 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99785 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99786 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99787 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99788 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99789 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99790 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99791 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99792 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99793 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99794 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99795 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99796 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99797 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99798 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99799 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99800 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99801 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99802 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99803 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99804 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99805 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99806 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99807 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99808 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99809 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99810 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99811 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99812 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99813 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99814 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99815 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99816 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99817 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99818 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99819 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99820 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99821 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99822 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99823 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99824 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99825 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99826 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99827 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99828 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99829 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99830 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99831 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99832 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99833 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99834 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99835 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99836 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99837 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99838 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99839 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99840 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99841 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99842 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99843 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99844 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99845 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99846 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99847 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99848 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99849 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99850 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99851 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99852 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99853 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99854 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99855 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99856 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99857 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99858 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99859 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99860 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99861 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99862 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99863 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99864 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99865 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99866 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99867 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99868 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99869 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99870 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99871 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99872 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99873 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99874 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99875 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99876 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99877 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99878 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99879 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99880 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99881 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99882 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99883 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99884 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99885 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99886 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99887 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99888 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99889 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99890 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99891 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99892 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99893 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99894 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99895 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99896 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99897 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99898 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99899 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99900 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99901 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99902 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99903 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99904 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99905 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99906 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99907 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99908 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99909 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99910 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99911 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99912 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99913 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99914 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99915 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99916 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99917 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99918 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99919 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99920 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99921 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99922 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99923 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99924 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99925 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99926 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99927 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99928 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99929 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99930 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99931 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99932 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99933 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99934 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99935 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99936 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99937 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99938 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99939 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99940 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99941 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99942 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99943 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99944 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99945 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99946 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99947 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99948 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99949 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99950 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99951 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99952 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99953 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99954 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99955 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99956 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99957 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99958 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99959 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99960 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99961 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99962 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99963 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99964 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99965 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99966 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99967 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99968 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99969 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99970 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99971 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99972 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99973 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99974 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99975 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99976 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99977 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99978 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99979 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99980 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99981 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99982 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99983 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99984 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99985 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99986 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99987 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99988 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99989 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99990 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99991 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99992 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99993 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99994 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99995 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99996 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99997 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99998 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99999 => [
				'validator'                => new NullableIsInstanceOfValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
