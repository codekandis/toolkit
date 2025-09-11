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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0084 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			84000 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84001 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84002 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84003 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84004 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84005 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84006 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84007 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84008 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84009 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84010 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84011 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84012 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84013 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84014 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84015 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84016 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84017 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84018 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84019 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84020 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84021 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84022 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84023 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84024 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84025 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84026 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84027 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84028 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84029 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84030 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84031 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84032 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84033 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84034 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84035 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84036 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84037 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84038 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84039 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84040 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84041 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84042 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84043 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84044 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84045 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84046 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84047 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84048 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84049 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84050 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84051 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84052 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84053 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84054 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84055 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84056 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84057 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84058 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84059 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84060 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84061 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84062 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84063 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84064 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84065 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84066 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84067 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84068 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84069 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84070 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84071 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84072 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84073 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84074 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84075 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84076 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84077 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84078 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84079 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84080 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84081 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84082 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84083 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84084 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84085 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84086 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84087 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84088 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84089 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84090 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84091 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84092 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84093 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84094 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84095 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84096 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84097 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84098 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84099 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84100 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84101 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84102 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84103 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84104 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84105 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84106 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84107 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84108 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84109 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84110 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84111 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84112 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84113 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84114 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84115 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84116 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84117 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84118 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84119 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84120 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84121 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84122 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84123 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84124 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84125 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84126 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84127 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84128 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84129 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84130 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84131 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84132 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84133 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84134 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84135 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84136 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84137 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84138 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84139 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84140 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84141 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84142 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84143 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84144 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84145 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84146 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84147 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84148 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84149 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84150 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84151 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84152 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84153 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84154 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84155 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84156 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84157 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84158 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84159 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84160 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84161 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84162 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84163 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84164 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84165 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84166 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84167 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84168 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84169 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84170 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84171 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84172 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84173 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84174 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84175 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84176 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84177 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84178 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84179 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84180 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84181 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84182 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84183 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84184 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84185 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84186 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84187 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84188 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84189 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84190 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84191 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84192 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84193 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84194 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84195 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84196 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84197 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84198 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84199 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84200 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84201 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84202 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84203 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84204 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84205 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84206 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84207 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84208 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84209 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84210 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84211 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84212 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84213 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84214 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84215 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84216 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84217 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84218 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84219 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84220 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84221 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84222 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84223 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84224 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84225 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84226 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84227 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84228 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84229 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84230 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84231 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84232 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84233 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84234 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84235 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84236 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84237 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84238 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84239 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84240 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84241 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84242 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84243 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84244 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84245 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84246 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84247 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84248 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84249 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84250 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84251 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84252 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84253 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84254 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84255 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84256 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84257 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84258 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84259 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84260 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84261 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84262 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84263 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84264 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84265 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84266 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84267 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84268 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84269 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84270 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84271 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84272 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84273 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84274 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84275 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84276 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84277 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84278 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84279 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84280 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84281 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84282 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84283 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84284 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84285 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84286 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84287 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84288 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84289 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84290 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84291 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84292 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84293 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84294 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84295 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84296 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84297 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84298 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84299 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84300 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84301 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84302 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84303 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84304 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84305 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84306 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84307 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84308 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84309 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84310 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84311 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84312 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84313 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84314 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84315 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84316 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84317 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84318 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84319 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84320 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84321 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84322 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84323 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84324 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84325 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84326 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84327 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84328 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84329 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84330 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84331 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84332 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84333 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84334 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84335 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84336 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84337 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84338 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84339 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84340 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84341 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84342 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84343 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84344 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84345 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84346 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84347 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84348 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84349 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84350 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84351 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84352 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84353 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84354 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84355 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84356 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84357 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84358 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84359 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84360 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84361 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84362 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84363 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84364 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84365 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84366 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84367 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84368 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84369 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84370 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84371 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84372 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84373 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84374 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84375 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84376 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84377 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84378 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84379 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84380 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84381 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84382 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84383 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84384 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84385 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84386 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84387 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84388 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84389 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84390 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84391 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84392 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84393 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84394 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84395 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84396 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84397 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84398 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84399 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84400 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84401 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84402 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84403 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84404 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84405 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84406 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84407 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84408 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84409 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84410 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84411 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84412 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84413 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84414 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84415 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84416 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84417 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84418 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84419 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84420 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84421 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84422 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84423 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84424 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84425 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84426 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84427 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84428 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84429 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84430 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84431 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84432 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84433 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84434 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84435 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84436 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84437 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84438 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84439 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84440 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84441 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84442 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84443 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84444 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84445 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84446 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84447 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84448 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84449 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84450 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84451 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84452 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84453 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84454 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84455 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84456 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84457 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84458 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84459 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84460 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84461 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84462 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84463 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84464 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84465 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84466 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84467 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84468 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84469 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84470 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84471 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84472 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84473 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84474 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84475 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84476 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84477 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84478 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84479 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84480 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84481 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84482 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84483 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84484 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84485 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84486 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84487 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84488 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84489 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84490 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84491 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84492 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84493 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84494 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84495 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84496 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84497 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84498 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84499 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84500 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84501 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84502 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84503 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84504 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84505 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84506 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84507 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84508 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84509 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84510 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84511 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84512 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84513 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84514 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84515 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84516 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84517 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84518 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84519 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84520 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84521 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84522 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84523 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84524 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84525 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84526 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84527 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84528 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84529 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84530 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84531 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84532 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84533 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84534 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84535 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84536 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84537 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84538 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84539 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84540 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84541 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84542 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84543 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84544 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84545 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84546 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84547 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84548 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84549 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84550 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84551 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84552 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84553 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84554 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84555 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84556 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84557 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84558 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84559 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84560 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84561 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84562 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84563 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84564 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84565 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84566 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84567 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84568 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84569 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84570 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84571 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84572 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84573 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84574 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84575 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84576 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84577 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84578 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84579 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84580 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84581 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84582 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84583 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84584 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84585 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84586 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84587 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84588 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84589 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84590 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84591 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84592 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84593 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84594 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84595 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84596 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84597 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84598 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84599 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84600 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84601 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84602 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84603 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84604 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84605 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84606 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84607 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84608 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84609 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84610 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84611 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84612 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84613 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84614 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84615 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84616 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84617 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84618 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84619 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84620 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84621 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84622 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84623 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84624 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84625 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84626 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84627 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84628 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84629 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84630 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84631 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84632 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84633 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84634 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84635 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84636 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84637 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84638 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84639 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84640 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84641 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84642 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84643 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84644 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84645 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84646 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84647 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84648 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84649 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84650 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84651 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84652 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84653 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84654 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84655 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84656 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84657 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84658 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84659 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84660 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84661 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84662 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84663 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84664 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84665 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84666 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84667 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84668 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84669 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84670 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84671 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84672 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84673 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84674 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84675 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84676 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84677 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84678 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84679 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84680 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84681 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84682 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84683 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84684 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84685 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84686 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84687 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84688 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84689 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84690 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84691 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84692 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84693 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84694 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84695 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84696 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84697 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84698 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84699 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84700 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84701 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84702 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84703 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84704 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84705 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84706 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84707 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84708 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84709 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84710 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84711 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84712 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84713 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84714 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84715 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84716 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84717 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84718 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84719 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84720 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84721 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84722 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84723 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84724 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84725 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84726 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84727 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84728 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84729 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84730 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84731 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84732 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84733 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84734 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84735 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84736 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84737 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84738 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84739 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84740 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84741 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84742 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84743 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84744 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84745 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84746 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84747 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84748 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84749 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84750 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84751 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84752 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84753 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84754 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84755 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84756 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84757 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84758 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84759 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84760 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84761 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84762 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84763 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84764 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84765 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84766 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84767 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84768 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84769 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84770 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84771 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84772 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84773 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84774 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84775 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84776 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84777 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84778 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84779 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84780 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84781 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84782 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84783 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84784 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84785 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84786 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84787 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84788 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84789 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84790 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84791 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84792 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84793 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84794 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84795 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84796 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84797 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84798 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84799 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84800 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84801 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84802 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84803 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84804 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84805 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84806 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84807 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84808 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84809 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84810 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84811 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84812 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84813 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84814 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84815 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84816 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84817 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84818 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84819 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84820 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84821 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84822 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84823 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84824 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84825 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84826 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84827 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84828 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84829 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84830 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84831 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84832 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84833 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84834 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84835 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84836 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84837 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84838 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84839 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84840 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84841 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84842 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84843 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84844 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84845 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84846 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84847 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84848 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84849 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84850 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84851 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84852 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84853 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84854 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84855 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84856 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84857 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84858 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84859 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84860 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84861 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84862 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84863 => [
				'validator'                => new NullableIsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84864 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			84865 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84866 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84867 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84868 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84869 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84870 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84871 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84872 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84873 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84874 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84875 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84876 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84877 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84878 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84879 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84880 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84881 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84882 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84883 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84884 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84885 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84886 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84887 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84888 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84889 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84890 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84891 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84892 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84893 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84894 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84895 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84896 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84897 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84898 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84899 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84900 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84901 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84902 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84903 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84904 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84905 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84906 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84907 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84908 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84909 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84910 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84911 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84912 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84913 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84914 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84915 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84916 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84917 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84918 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84919 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84920 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84921 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84922 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84923 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84924 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84925 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84926 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84927 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84928 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84929 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84930 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84931 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84932 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84933 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84934 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84935 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84936 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84937 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84938 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84939 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84940 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84941 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84942 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84943 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84944 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84945 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84946 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84947 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84948 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84949 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84950 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84951 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84952 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84953 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84954 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84955 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84956 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84957 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84958 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84959 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84960 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84961 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84962 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84963 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84964 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84965 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84966 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84967 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84968 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84969 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84970 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84971 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84972 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84973 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84974 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84975 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84976 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84977 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84978 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84979 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84980 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84981 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84982 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84983 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84984 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84985 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84986 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84987 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84988 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84989 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84990 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84991 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84992 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84993 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84994 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84995 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84996 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84997 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84998 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			84999 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
