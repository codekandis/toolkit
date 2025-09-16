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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0016 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			16000 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16001 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16002 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16003 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16004 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16005 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16006 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16007 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16008 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16009 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16010 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16011 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16012 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16013 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16014 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16015 => [
				'validator'                => new IsInArrayValidator( Values::FLOAT_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16016 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16017 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16018 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16019 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16020 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16021 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16022 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16023 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16024 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16025 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16026 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16027 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16028 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16029 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16030 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16031 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16032 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16033 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16034 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16035 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16036 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16037 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16038 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16039 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16040 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16041 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16042 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16043 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16044 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16045 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16046 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16047 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16048 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16049 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16050 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16051 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16052 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16053 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16054 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16055 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16056 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16057 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16058 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16059 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16060 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16061 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16062 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16063 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16064 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16065 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16066 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16067 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16068 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16069 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16070 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16071 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16072 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16073 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16074 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16075 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			16076 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16077 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16078 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16079 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16080 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16081 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16082 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16083 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16084 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16085 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16086 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16087 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16088 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16089 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16090 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16091 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16092 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16093 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16094 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16095 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16096 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16097 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16098 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16099 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16100 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16101 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16102 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16103 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16104 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16105 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16106 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16107 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16108 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16109 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16110 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16111 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16112 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16113 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16114 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16115 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16116 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16117 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16118 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16119 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16120 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16121 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16122 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16123 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16124 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16125 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16126 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16127 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16128 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16129 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16130 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16131 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16132 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16133 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16134 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16135 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16136 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16137 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16138 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16139 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16140 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16141 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16142 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16143 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16144 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16145 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16146 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16147 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16148 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16149 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16150 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16151 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16152 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16153 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16154 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16155 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16156 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16157 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16158 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16159 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16160 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16161 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16162 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16163 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16164 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16165 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16166 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16167 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16168 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16169 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16170 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16171 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16172 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16173 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16174 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16175 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16176 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16177 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16178 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16179 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16180 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16181 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16182 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16183 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16184 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16185 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16186 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16187 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16188 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16189 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16190 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16191 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16192 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16193 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16194 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16195 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16196 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16197 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16198 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16199 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16200 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16201 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16202 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16203 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16204 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16205 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16206 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16207 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16208 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16209 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16210 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16211 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16212 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16213 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16214 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16215 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16216 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16217 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16218 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16219 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16220 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16221 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16222 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16223 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16224 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16225 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16226 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16227 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16228 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16229 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16230 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16231 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16232 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16233 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16234 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16235 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16236 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16237 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16238 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16239 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16240 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16241 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16242 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16243 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16244 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16245 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16246 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16247 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16248 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16249 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16250 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16251 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16252 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16253 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16254 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16255 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16256 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16257 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16258 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16259 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16260 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16261 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16262 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16263 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16264 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16265 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16266 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16267 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16268 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16269 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16270 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16271 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16272 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16273 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16274 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16275 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16276 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16277 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16278 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16279 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16280 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16281 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16282 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16283 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16284 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			16285 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16286 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16287 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16288 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16289 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16290 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16291 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16292 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16293 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16294 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16295 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16296 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16297 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16298 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16299 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16300 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16301 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16302 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16303 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16304 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16305 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16306 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16307 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16308 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16309 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16310 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16311 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16312 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16313 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16314 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16315 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16316 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16317 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16318 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16319 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16320 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16321 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16322 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16323 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16324 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16325 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16326 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16327 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16328 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16329 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16330 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16331 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16332 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16333 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16334 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16335 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16336 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16337 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16338 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16339 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16340 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16341 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16342 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16343 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16344 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16345 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16346 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16347 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16348 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16349 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16350 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16351 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16352 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16353 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16354 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16355 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16356 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16357 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16358 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16359 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16360 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16361 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16362 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16363 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16364 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16365 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16366 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16367 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16368 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16369 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16370 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16371 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16372 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16373 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16374 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16375 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16376 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16377 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16378 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16379 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16380 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16381 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16382 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16383 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16384 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16385 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16386 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16387 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16388 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16389 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16390 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16391 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16392 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16393 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16394 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16395 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16396 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16397 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16398 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16399 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16400 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16401 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16402 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16403 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16404 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16405 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16406 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16407 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16408 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16409 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16410 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16411 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16412 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16413 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16414 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16415 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16416 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16417 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16418 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16419 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16420 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16421 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16422 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16423 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16424 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16425 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16426 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16427 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16428 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16429 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16430 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16431 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16432 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16433 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16434 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16435 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16436 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16437 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16438 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16439 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16440 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16441 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16442 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16443 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16444 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16445 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16446 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16447 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16448 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16449 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16450 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16451 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16452 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16453 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16454 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16455 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16456 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16457 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16458 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16459 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16460 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16461 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16462 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16463 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16464 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16465 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16466 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16467 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16468 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16469 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16470 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16471 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16472 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16473 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16474 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16475 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16476 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16477 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16478 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16479 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16480 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16481 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16482 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16483 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16484 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16485 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16486 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16487 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16488 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16489 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16490 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16491 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			16492 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			16493 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16494 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16495 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16496 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16497 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16498 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16499 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16500 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16501 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16502 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16503 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16504 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16505 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16506 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16507 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16508 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16509 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16510 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16511 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16512 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16513 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16514 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16515 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16516 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16517 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16518 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16519 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16520 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16521 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16522 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16523 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16524 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16525 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16526 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16527 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16528 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16529 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16530 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16531 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16532 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16533 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16534 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16535 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16536 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16537 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16538 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16539 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16540 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16541 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16542 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16543 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16544 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16545 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16546 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16547 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16548 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16549 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16550 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16551 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16552 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16553 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16554 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16555 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16556 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16557 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16558 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16559 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16560 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16561 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16562 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16563 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16564 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16565 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16566 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16567 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16568 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16569 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16570 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16571 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16572 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16573 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16574 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16575 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16576 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16577 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16578 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16579 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16580 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16581 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16582 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16583 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16584 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16585 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16586 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16587 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16588 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16589 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16590 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16591 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16592 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16593 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16594 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16595 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16596 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16597 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16598 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16599 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16600 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16601 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16602 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16603 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16604 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16605 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16606 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16607 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16608 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16609 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16610 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16611 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16612 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16613 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16614 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16615 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16616 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16617 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16618 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16619 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16620 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16621 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16622 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16623 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16624 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16625 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16626 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16627 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16628 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16629 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16630 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16631 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16632 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16633 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16634 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16635 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16636 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16637 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16638 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16639 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16640 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16641 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16642 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16643 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16644 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16645 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16646 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16647 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16648 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16649 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16650 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16651 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16652 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16653 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16654 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16655 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16656 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16657 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16658 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16659 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16660 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16661 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16662 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16663 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16664 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16665 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16666 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16667 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16668 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16669 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16670 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16671 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16672 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16673 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16674 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16675 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16676 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16677 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16678 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16679 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16680 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16681 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16682 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16683 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16684 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16685 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16686 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16687 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16688 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16689 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16690 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16691 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16692 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16693 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16694 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16695 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16696 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16697 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16698 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16699 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			16700 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			16701 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16702 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16703 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16704 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16705 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16706 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16707 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16708 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16709 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16710 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16711 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16712 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16713 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16714 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16715 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16716 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16717 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16718 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16719 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16720 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16721 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16722 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16723 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16724 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16725 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16726 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16727 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16728 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16729 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16730 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16731 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16732 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16733 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16734 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16735 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16736 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16737 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16738 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16739 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16740 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16741 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16742 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16743 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16744 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16745 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16746 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16747 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16748 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16749 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16750 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16751 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16752 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16753 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16754 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16755 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16756 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16757 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16758 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16759 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16760 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16761 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16762 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16763 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16764 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16765 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16766 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16767 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16768 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16769 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16770 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16771 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16772 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16773 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16774 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16775 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16776 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16777 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16778 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16779 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16780 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16781 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16782 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16783 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16784 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16785 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16786 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16787 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16788 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16789 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16790 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16791 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16792 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16793 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16794 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16795 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16796 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16797 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16798 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16799 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16800 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16801 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16802 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16803 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16804 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16805 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16806 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16807 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16808 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16809 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16810 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16811 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16812 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16813 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16814 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16815 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16816 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16817 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16818 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16819 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16820 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16821 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16822 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16823 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16824 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16825 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16826 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16827 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16828 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16829 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16830 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16831 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16832 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16833 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16834 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16835 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16836 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16837 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16838 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16839 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16840 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16841 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16842 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16843 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16844 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16845 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16846 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16847 => [
				'validator'                => new IsInArrayValidator( Values::DATETIME_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16848 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16849 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16850 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16851 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16852 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16853 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16854 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16855 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16856 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16857 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16858 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16859 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16860 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16861 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16862 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16863 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16864 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16865 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16866 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16867 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16868 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16869 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16870 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16871 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16872 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16873 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16874 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16875 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16876 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16877 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16878 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16879 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16880 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16881 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16882 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16883 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16884 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16885 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16886 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16887 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16888 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16889 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16890 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16891 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16892 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16893 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16894 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16895 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16896 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16897 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16898 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16899 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16900 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16901 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16902 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16903 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16904 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16905 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16906 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16907 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16908 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16909 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16910 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16911 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16912 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16913 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16914 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16915 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			16916 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16917 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16918 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16919 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16920 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16921 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16922 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16923 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16924 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16925 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16926 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16927 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16928 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16929 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16930 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16931 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16932 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16933 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16934 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16935 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16936 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16937 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16938 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16939 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16940 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16941 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16942 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16943 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16944 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16945 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16946 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16947 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16948 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16949 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16950 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16951 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16952 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16953 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16954 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16955 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16956 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16957 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16958 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16959 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16960 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16961 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16962 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16963 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16964 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16965 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16966 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16967 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16968 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16969 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16970 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16971 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16972 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16973 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16974 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16975 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16976 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16977 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16978 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16979 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16980 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16981 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16982 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16983 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16984 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16985 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16986 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16987 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16988 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16989 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16990 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16991 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16992 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16993 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16994 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16995 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16996 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16997 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16998 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			16999 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
