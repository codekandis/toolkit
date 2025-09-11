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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0068 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			68000 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68001 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68002 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68003 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68004 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68005 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68006 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68007 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68008 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68009 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68010 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68011 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68012 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68013 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68014 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68015 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68016 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			68017 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68018 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68019 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68020 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68021 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68022 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68023 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68024 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68025 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68026 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68027 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68028 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68029 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68030 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68031 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68032 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68033 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68034 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68035 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68036 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68037 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68038 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68039 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			68040 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			68041 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68042 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68043 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68044 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68045 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68046 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68047 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68048 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68049 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68050 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68051 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68052 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68053 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68054 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68055 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68056 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68057 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68058 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68059 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68060 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68061 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68062 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68063 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68064 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68065 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68066 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68067 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68068 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68069 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68070 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68071 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68072 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68073 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68074 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68075 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68076 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68077 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68078 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68079 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68080 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68081 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68082 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68083 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68084 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68085 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68086 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68087 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68088 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68089 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68090 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68091 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68092 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68093 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68094 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68095 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68096 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68097 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68098 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68099 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68100 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68101 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68102 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68103 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68104 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68105 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68106 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68107 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68108 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68109 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68110 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68111 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68112 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68113 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68114 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68115 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68116 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68117 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68118 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68119 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68120 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68121 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68122 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68123 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68124 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68125 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68126 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68127 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68128 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68129 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68130 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68131 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68132 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68133 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68134 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68135 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68136 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68137 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68138 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68139 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68140 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68141 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68142 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68143 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68144 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68145 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68146 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68147 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68148 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68149 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68150 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68151 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68152 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68153 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68154 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68155 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68156 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68157 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68158 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68159 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68160 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68161 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68162 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68163 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68164 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68165 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68166 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68167 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68168 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68169 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68170 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68171 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68172 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68173 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68174 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68175 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68176 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68177 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68178 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68179 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68180 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68181 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68182 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68183 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68184 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68185 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68186 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68187 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68188 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68189 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68190 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68191 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68192 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68193 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68194 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68195 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68196 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68197 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68198 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68199 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68200 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68201 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68202 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68203 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68204 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68205 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68206 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68207 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68208 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68209 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68210 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68211 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68212 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68213 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68214 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68215 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68216 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68217 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68218 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68219 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68220 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68221 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68222 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68223 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68224 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			68225 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68226 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68227 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68228 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68229 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68230 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68231 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68232 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68233 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68234 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68235 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68236 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68237 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68238 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68239 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68240 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68241 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68242 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68243 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68244 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68245 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68246 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68247 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			68248 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			68249 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68250 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68251 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68252 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68253 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68254 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68255 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68256 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68257 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68258 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68259 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68260 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68261 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68262 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68263 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68264 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68265 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68266 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68267 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68268 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68269 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68270 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68271 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68272 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68273 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68274 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68275 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68276 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68277 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68278 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68279 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68280 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68281 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68282 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68283 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68284 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68285 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68286 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68287 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68288 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68289 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68290 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68291 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68292 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68293 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68294 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68295 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68296 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68297 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68298 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68299 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68300 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68301 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68302 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68303 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68304 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68305 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68306 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68307 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68308 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68309 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68310 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68311 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68312 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68313 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68314 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68315 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68316 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68317 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68318 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68319 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68320 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68321 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68322 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68323 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68324 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68325 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68326 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68327 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68328 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68329 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68330 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68331 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68332 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68333 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68334 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68335 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68336 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68337 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68338 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68339 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68340 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68341 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68342 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68343 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68344 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68345 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68346 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68347 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68348 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68349 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68350 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68351 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68352 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68353 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68354 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68355 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68356 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68357 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68358 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68359 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68360 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68361 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68362 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68363 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68364 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68365 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68366 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68367 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68368 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68369 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68370 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68371 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68372 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68373 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68374 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68375 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68376 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68377 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68378 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68379 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68380 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68381 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68382 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68383 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68384 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68385 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68386 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68387 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68388 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68389 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68390 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68391 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68392 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68393 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68394 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68395 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68396 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68397 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68398 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68399 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68400 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68401 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68402 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68403 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68404 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68405 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68406 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68407 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68408 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68409 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68410 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68411 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68412 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68413 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68414 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68415 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68416 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68417 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68418 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68419 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68420 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68421 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68422 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68423 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68424 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68425 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68426 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68427 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68428 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68429 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68430 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68431 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68432 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			68433 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68434 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68435 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68436 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68437 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68438 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68439 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68440 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68441 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68442 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68443 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68444 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68445 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68446 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68447 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68448 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68449 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68450 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68451 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68452 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68453 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68454 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68455 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68456 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68457 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68458 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68459 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68460 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68461 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			68462 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68463 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68464 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68465 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68466 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68467 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68468 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68469 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68470 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68471 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68472 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68473 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68474 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68475 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68476 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68477 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68478 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68479 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68480 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68481 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68482 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68483 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68484 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68485 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68486 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68487 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68488 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68489 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68490 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68491 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68492 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68493 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68494 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68495 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68496 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68497 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68498 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68499 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68500 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68501 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68502 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68503 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68504 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68505 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68506 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68507 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68508 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68509 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68510 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68511 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68512 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68513 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68514 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68515 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68516 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68517 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68518 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68519 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68520 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68521 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68522 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68523 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68524 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68525 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68526 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68527 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68528 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68529 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68530 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68531 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68532 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68533 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68534 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68535 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68536 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68537 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68538 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68539 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68540 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68541 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68542 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68543 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68544 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68545 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68546 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68547 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68548 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68549 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68550 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68551 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68552 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68553 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68554 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68555 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68556 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68557 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68558 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68559 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68560 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68561 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68562 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68563 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68564 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68565 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68566 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68567 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68568 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68569 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68570 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68571 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68572 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68573 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68574 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68575 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68576 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68577 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68578 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68579 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68580 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68581 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68582 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68583 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68584 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68585 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68586 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68587 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68588 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68589 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68590 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68591 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68592 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68593 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68594 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68595 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68596 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68597 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68598 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68599 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68600 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68601 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68602 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68603 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68604 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68605 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68606 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68607 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68608 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68609 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68610 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68611 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68612 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68613 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68614 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68615 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68616 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68617 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68618 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68619 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68620 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68621 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68622 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68623 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68624 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68625 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68626 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68627 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68628 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68629 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68630 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68631 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68632 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68633 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68634 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68635 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68636 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68637 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68638 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68639 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68640 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			68641 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68642 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68643 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68644 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68645 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68646 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68647 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68648 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68649 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68650 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68651 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68652 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68653 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68654 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68655 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68656 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68657 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68658 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68659 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68660 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68661 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68662 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68663 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68664 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68665 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68666 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68667 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68668 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68669 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68670 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			68671 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68672 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68673 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68674 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68675 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68676 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68677 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68678 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68679 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68680 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68681 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68682 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68683 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68684 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68685 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68686 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68687 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68688 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68689 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68690 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68691 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68692 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68693 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68694 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68695 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68696 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68697 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68698 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68699 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68700 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68701 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68702 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68703 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68704 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68705 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68706 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68707 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68708 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68709 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68710 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68711 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68712 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68713 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68714 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68715 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68716 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68717 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68718 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68719 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68720 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68721 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68722 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68723 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68724 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68725 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68726 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68727 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68728 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68729 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68730 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68731 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68732 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68733 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68734 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68735 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68736 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68737 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68738 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68739 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68740 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68741 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68742 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68743 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68744 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68745 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68746 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68747 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68748 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68749 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68750 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68751 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68752 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68753 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68754 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68755 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68756 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68757 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68758 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68759 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68760 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68761 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68762 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68763 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68764 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68765 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68766 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68767 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68768 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68769 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68770 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68771 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68772 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68773 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68774 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68775 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68776 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68777 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68778 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68779 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68780 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68781 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68782 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68783 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68784 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68785 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68786 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68787 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68788 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68789 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68790 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68791 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68792 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68793 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68794 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68795 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68796 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68797 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68798 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68799 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68800 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68801 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68802 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68803 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68804 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68805 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68806 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68807 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68808 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68809 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68810 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68811 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68812 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68813 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68814 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68815 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68816 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68817 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68818 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68819 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68820 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68821 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68822 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68823 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68824 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68825 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68826 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68827 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68828 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68829 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68830 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68831 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68832 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68833 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68834 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68835 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68836 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68837 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68838 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68839 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68840 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68841 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68842 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68843 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68844 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68845 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68846 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68847 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68848 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			68849 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68850 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68851 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68852 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68853 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68854 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68855 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68856 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68857 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68858 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68859 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68860 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68861 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68862 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68863 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68864 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68865 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68866 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68867 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68868 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68869 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68870 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68871 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68872 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68873 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68874 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68875 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68876 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68877 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			68878 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			68879 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68880 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68881 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68882 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68883 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68884 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68885 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68886 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68887 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68888 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68889 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68890 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68891 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68892 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68893 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68894 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68895 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68896 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68897 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68898 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68899 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68900 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68901 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68902 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68903 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68904 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68905 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68906 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68907 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68908 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68909 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68910 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68911 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68912 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68913 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68914 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68915 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68916 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68917 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68918 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68919 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68920 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68921 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68922 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68923 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68924 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68925 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68926 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68927 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68928 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68929 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68930 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68931 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68932 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68933 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68934 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68935 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68936 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68937 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68938 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68939 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68940 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68941 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68942 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68943 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68944 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68945 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68946 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68947 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68948 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68949 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68950 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68951 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68952 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68953 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68954 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68955 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68956 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68957 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68958 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68959 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68960 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68961 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68962 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68963 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68964 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68965 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68966 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68967 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68968 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68969 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68970 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68971 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68972 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68973 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68974 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68975 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68976 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68977 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68978 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68979 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68980 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68981 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68982 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68983 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68984 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68985 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68986 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68987 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68988 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68989 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68990 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68991 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68992 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68993 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68994 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68995 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68996 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68997 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68998 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			68999 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
