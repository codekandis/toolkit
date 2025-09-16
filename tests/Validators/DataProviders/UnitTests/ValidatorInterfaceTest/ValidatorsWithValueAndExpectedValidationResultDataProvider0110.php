<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\NullableIsStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsSubClassOfArrayValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0110 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			110000 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110001 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110002 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110003 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110004 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110005 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110006 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110007 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110008 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110009 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110010 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110011 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110012 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110013 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110014 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110015 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110016 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110017 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110018 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110019 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110020 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110021 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110022 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110023 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110024 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110025 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110026 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110027 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110028 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110029 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110030 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110031 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110032 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110033 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110034 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110035 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110036 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110037 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110038 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110039 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110040 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110041 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110042 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110043 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110044 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110045 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110046 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110047 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110048 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110049 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110050 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110051 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110052 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110053 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110054 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110055 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110056 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110057 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110058 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110059 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110060 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110061 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110062 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110063 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110064 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110065 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110066 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110067 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110068 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110069 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110070 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110071 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110072 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110073 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110074 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110075 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110076 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110077 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110078 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110079 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110080 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110081 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110082 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110083 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110084 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110085 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110086 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110087 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110088 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110089 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110090 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110091 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110092 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110093 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110094 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110095 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110096 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110097 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110098 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110099 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110100 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110101 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110102 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110103 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110104 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110105 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110106 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110107 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110108 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110109 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110110 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110111 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110112 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110113 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110114 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110115 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110116 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110117 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110118 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110119 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110120 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110121 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110122 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110123 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110124 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110125 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110126 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110127 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110128 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110129 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110130 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110131 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110132 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110133 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110134 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110135 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110136 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110137 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110138 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110139 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110140 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110141 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110142 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110143 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110144 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110145 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110146 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110147 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110148 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110149 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110150 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110151 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110152 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110153 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110154 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110155 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110156 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110157 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110158 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110159 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110160 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110161 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110162 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110163 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110164 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110165 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110166 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110167 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110168 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110169 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110170 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110171 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110172 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110173 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110174 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110175 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110176 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110177 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110178 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110179 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110180 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110181 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110182 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110183 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110184 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110185 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110186 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110187 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110188 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110189 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110190 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110191 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110192 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110193 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110194 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110195 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110196 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110197 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110198 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110199 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110200 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110201 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110202 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110203 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110204 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110205 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110206 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110207 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110208 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110209 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110210 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110211 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110212 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110213 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110214 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110215 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110216 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110217 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110218 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110219 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110220 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110221 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110222 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110223 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110224 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110225 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110226 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110227 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110228 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110229 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110230 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110231 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110232 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110233 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110234 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110235 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110236 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110237 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110238 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110239 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110240 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110241 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110242 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110243 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110244 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110245 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110246 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110247 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110248 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110249 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110250 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110251 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110252 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110253 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110254 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110255 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110256 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110257 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110258 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110259 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110260 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110261 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110262 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110263 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110264 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110265 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110266 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110267 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110268 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110269 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110270 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110271 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110272 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110273 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110274 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110275 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110276 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110277 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110278 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110279 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110280 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110281 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110282 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110283 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110284 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110285 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110286 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110287 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110288 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110289 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110290 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110291 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110292 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110293 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110294 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110295 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110296 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110297 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110298 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110299 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110300 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110301 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110302 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110303 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110304 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110305 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110306 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110307 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110308 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110309 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110310 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110311 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110312 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110313 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110314 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110315 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110316 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110317 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110318 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110319 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110320 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110321 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110322 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110323 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110324 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110325 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110326 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110327 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110328 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110329 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110330 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110331 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110332 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110333 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110334 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110335 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110336 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110337 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110338 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110339 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110340 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110341 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110342 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110343 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110344 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110345 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110346 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110347 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110348 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110349 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110350 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110351 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110352 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110353 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110354 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110355 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110356 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110357 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110358 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110359 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110360 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110361 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110362 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110363 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110364 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110365 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110366 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110367 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110368 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110369 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110370 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110371 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110372 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110373 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110374 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110375 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110376 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110377 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110378 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110379 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110380 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110381 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110382 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110383 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110384 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110385 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110386 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110387 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110388 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110389 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110390 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110391 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110392 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110393 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110394 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110395 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110396 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110397 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110398 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110399 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110400 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110401 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110402 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110403 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110404 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110405 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110406 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110407 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110408 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110409 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110410 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110411 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110412 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110413 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110414 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110415 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110416 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110417 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110418 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110419 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110420 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110421 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110422 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110423 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110424 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110425 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110426 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110427 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110428 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110429 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110430 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110431 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110432 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110433 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110434 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110435 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110436 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110437 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110438 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110439 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110440 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110441 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110442 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110443 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110444 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110445 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110446 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110447 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110448 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110449 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110450 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110451 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110452 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110453 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110454 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110455 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110456 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110457 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110458 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110459 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110460 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110461 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110462 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110463 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110464 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110465 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110466 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110467 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110468 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110469 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110470 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110471 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110472 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110473 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110474 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110475 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110476 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110477 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110478 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110479 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110480 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110481 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110482 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110483 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110484 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110485 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110486 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110487 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110488 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110489 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110490 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110491 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110492 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110493 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110494 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110495 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110496 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110497 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110498 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110499 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110500 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110501 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110502 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110503 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110504 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110505 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110506 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110507 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110508 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110509 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110510 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110511 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110512 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110513 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110514 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110515 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110516 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110517 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110518 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110519 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110520 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110521 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110522 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110523 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110524 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110525 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110526 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110527 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110528 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110529 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110530 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110531 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110532 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110533 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110534 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110535 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110536 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110537 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110538 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110539 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110540 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110541 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110542 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110543 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110544 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110545 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110546 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110547 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110548 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110549 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110550 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110551 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110552 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110553 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110554 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110555 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110556 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110557 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110558 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110559 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110560 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110561 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110562 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110563 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110564 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110565 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110566 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110567 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110568 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110569 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110570 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110571 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110572 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110573 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110574 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110575 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110576 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110577 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110578 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110579 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110580 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110581 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110582 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110583 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110584 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110585 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110586 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110587 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110588 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110589 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110590 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110591 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110592 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110593 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110594 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110595 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110596 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110597 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110598 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110599 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110600 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110601 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110602 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110603 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110604 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110605 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110606 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110607 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110608 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110609 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110610 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110611 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110612 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110613 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110614 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110615 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110616 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110617 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110618 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110619 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110620 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110621 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110622 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110623 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110624 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110625 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110626 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110627 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110628 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110629 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110630 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110631 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110632 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110633 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110634 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110635 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110636 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110637 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110638 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110639 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110640 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110641 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110642 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110643 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110644 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110645 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110646 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110647 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110648 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110649 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110650 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110651 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110652 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110653 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110654 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110655 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110656 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110657 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110658 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110659 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110660 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110661 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110662 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110663 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110664 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110665 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110666 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110667 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110668 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110669 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110670 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110671 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110672 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110673 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110674 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110675 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110676 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110677 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110678 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110679 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110680 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110681 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110682 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110683 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110684 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110685 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110686 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110687 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110688 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110689 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110690 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110691 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110692 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110693 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110694 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110695 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110696 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110697 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110698 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110699 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110700 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110701 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110702 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110703 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110704 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110705 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110706 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110707 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110708 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110709 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110710 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110711 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110712 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110713 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110714 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110715 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110716 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110717 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110718 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110719 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110720 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110721 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110722 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110723 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110724 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110725 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110726 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110727 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110728 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110729 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110730 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110731 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110732 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110733 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110734 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110735 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110736 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110737 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110738 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110739 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110740 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110741 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110742 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110743 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110744 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110745 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110746 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110747 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110748 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110749 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110750 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110751 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110752 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110753 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110754 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110755 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110756 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110757 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110758 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110759 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110760 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110761 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110762 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110763 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110764 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110765 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110766 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110767 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110768 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110769 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110770 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110771 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110772 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110773 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110774 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110775 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110776 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110777 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110778 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110779 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110780 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110781 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110782 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110783 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110784 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110785 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110786 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110787 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110788 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110789 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110790 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110791 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110792 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110793 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110794 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110795 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110796 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110797 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110798 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110799 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110800 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110801 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110802 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110803 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110804 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110805 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110806 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110807 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110808 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110809 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110810 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110811 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110812 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110813 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110814 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110815 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110816 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110817 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110818 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110819 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110820 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110821 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110822 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110823 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110824 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110825 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110826 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110827 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110828 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110829 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110830 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110831 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110832 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110833 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110834 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110835 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110836 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110837 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110838 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110839 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110840 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110841 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110842 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110843 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110844 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110845 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110846 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110847 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110848 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110849 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110850 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110851 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110852 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110853 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110854 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110855 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110856 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110857 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110858 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110859 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110860 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110861 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110862 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110863 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110864 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110865 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110866 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110867 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110868 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110869 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110870 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110871 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110872 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110873 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110874 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110875 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110876 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110877 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110878 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110879 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110880 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110881 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110882 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110883 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110884 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110885 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110886 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110887 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110888 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110889 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110890 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110891 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110892 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110893 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110894 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110895 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110896 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110897 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110898 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110899 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110900 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110901 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110902 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110903 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110904 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110905 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110906 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110907 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110908 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110909 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110910 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110911 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110912 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110913 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110914 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110915 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110916 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110917 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110918 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110919 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110920 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110921 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110922 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110923 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110924 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110925 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110926 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110927 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110928 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110929 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110930 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110931 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110932 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110933 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110934 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110935 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110936 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110937 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110938 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110939 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110940 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110941 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110942 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110943 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110944 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110945 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110946 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110947 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110948 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110949 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110950 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110951 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110952 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110953 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110954 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110955 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110956 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110957 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110958 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110959 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110960 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110961 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110962 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110963 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110964 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110965 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110966 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110967 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110968 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110969 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110970 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110971 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110972 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110973 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110974 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110975 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110976 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110977 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110978 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110979 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110980 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110981 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110982 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110983 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110984 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110985 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110986 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110987 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110988 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110989 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110990 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110991 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110992 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110993 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110994 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110995 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110996 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110997 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110998 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110999 => [
				'validator'                => new NullableIsSubClassOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
