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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0069 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			69000 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69001 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69002 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69003 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69004 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69005 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69006 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69007 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69008 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69009 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69010 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69011 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69012 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69013 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69014 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69015 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69016 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69017 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69018 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69019 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69020 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69021 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69022 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69023 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69024 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69025 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69026 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69027 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69028 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69029 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69030 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69031 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69032 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69033 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69034 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69035 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69036 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69037 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69038 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69039 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69040 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69041 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69042 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69043 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69044 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69045 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69046 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69047 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69048 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69049 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69050 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69051 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69052 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69053 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69054 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69055 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69056 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			69057 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69058 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69059 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69060 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69061 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69062 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69063 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69064 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69065 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69066 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69067 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69068 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69069 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69070 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69071 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69072 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69073 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69074 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69075 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69076 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69077 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69078 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69079 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69080 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69081 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69082 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69083 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69084 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69085 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			69086 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			69087 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69088 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69089 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69090 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69091 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69092 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69093 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69094 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69095 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69096 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69097 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69098 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69099 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69100 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69101 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69102 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69103 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69104 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69105 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69106 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69107 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69108 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69109 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69110 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69111 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69112 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69113 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69114 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69115 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69116 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69117 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69118 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69119 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69120 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69121 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69122 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69123 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69124 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69125 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69126 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69127 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69128 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69129 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69130 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69131 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69132 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69133 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69134 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69135 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69136 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69137 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69138 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69139 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69140 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69141 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69142 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69143 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69144 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69145 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69146 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69147 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69148 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69149 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69150 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69151 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69152 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69153 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69154 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69155 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69156 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69157 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69158 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69159 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69160 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69161 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69162 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69163 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69164 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69165 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69166 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69167 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69168 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69169 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69170 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69171 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69172 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69173 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69174 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69175 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69176 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69177 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69178 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69179 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69180 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69181 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69182 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69183 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69184 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69185 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69186 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69187 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69188 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69189 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69190 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69191 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69192 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69193 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69194 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69195 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69196 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69197 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69198 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69199 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69200 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69201 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69202 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69203 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69204 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69205 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69206 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69207 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69208 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69209 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69210 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69211 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69212 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69213 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69214 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69215 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69216 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69217 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69218 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69219 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69220 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69221 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69222 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69223 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69224 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69225 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69226 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69227 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69228 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69229 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69230 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69231 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69232 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69233 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69234 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69235 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69236 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69237 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69238 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69239 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69240 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69241 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69242 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69243 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69244 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69245 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69246 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69247 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69248 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69249 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69250 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69251 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69252 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69253 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69254 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69255 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69256 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69257 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69258 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69259 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69260 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69261 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69262 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69263 => [
				'validator'                => new NullableIsInArrayValidator( Values::BINARY_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69264 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			69265 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69266 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69267 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69268 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69269 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69270 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69271 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69272 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69273 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69274 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69275 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69276 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69277 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69278 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69279 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69280 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69281 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69282 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69283 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69284 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69285 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69286 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69287 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69288 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69289 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69290 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69291 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69292 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69293 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69294 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69295 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69296 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69297 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69298 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69299 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			69300 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69301 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69302 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69303 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69304 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69305 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69306 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69307 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69308 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69309 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69310 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69311 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69312 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69313 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69314 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69315 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69316 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69317 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69318 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69319 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69320 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69321 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69322 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69323 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69324 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69325 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69326 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69327 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69328 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69329 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69330 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69331 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69332 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69333 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69334 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69335 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69336 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69337 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69338 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69339 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69340 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69341 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69342 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69343 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69344 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69345 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69346 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69347 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69348 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69349 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69350 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69351 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69352 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69353 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69354 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69355 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69356 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69357 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69358 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69359 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69360 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69361 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69362 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69363 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69364 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69365 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69366 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69367 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69368 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69369 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69370 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69371 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69372 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69373 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69374 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69375 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69376 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69377 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69378 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69379 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69380 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69381 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69382 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69383 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69384 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69385 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69386 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69387 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69388 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69389 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69390 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69391 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69392 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69393 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69394 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69395 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69396 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69397 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69398 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69399 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69400 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69401 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69402 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69403 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69404 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69405 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69406 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69407 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69408 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69409 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69410 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69411 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69412 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69413 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69414 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69415 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69416 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69417 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69418 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69419 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69420 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69421 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69422 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69423 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69424 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69425 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69426 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69427 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69428 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69429 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69430 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69431 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69432 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69433 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69434 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69435 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69436 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69437 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69438 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69439 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69440 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69441 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69442 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69443 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69444 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69445 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69446 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69447 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69448 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69449 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69450 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69451 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69452 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69453 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69454 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69455 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69456 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69457 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69458 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69459 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69460 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69461 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69462 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69463 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69464 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69465 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69466 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69467 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69468 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69469 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69470 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69471 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69472 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			69473 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69474 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69475 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69476 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69477 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69478 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69479 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69480 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69481 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69482 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69483 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69484 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69485 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69486 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69487 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69488 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69489 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69490 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69491 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69492 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69493 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69494 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69495 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69496 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69497 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69498 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69499 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69500 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69501 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69502 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69503 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69504 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69505 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69506 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69507 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69508 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			69509 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69510 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69511 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69512 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69513 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69514 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69515 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69516 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69517 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69518 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69519 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69520 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69521 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69522 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69523 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69524 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69525 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69526 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69527 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69528 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69529 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69530 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69531 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69532 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69533 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69534 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69535 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69536 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69537 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69538 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69539 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69540 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69541 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69542 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69543 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69544 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69545 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69546 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69547 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69548 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69549 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69550 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69551 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69552 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69553 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69554 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69555 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69556 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69557 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69558 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69559 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69560 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69561 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69562 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69563 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69564 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69565 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69566 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69567 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69568 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69569 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69570 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69571 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69572 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69573 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69574 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69575 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69576 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69577 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69578 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69579 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69580 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69581 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69582 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69583 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69584 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69585 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69586 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69587 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69588 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69589 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69590 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69591 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69592 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69593 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69594 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69595 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69596 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69597 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69598 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69599 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69600 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69601 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69602 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69603 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69604 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69605 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69606 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69607 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69608 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69609 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69610 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69611 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69612 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69613 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69614 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69615 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69616 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69617 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69618 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69619 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69620 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69621 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69622 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69623 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69624 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69625 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69626 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69627 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69628 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69629 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69630 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69631 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69632 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69633 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69634 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69635 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69636 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69637 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69638 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69639 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69640 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69641 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69642 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69643 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69644 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69645 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69646 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69647 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69648 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69649 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69650 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69651 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69652 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69653 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69654 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69655 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69656 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69657 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69658 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69659 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69660 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69661 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69662 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69663 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69664 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69665 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69666 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69667 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69668 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69669 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69670 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69671 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69672 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69673 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69674 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69675 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69676 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69677 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69678 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69679 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69680 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			69681 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69682 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69683 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69684 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69685 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69686 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69687 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69688 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69689 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69690 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69691 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69692 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69693 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69694 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69695 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69696 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69697 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69698 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69699 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69700 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69701 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69702 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69703 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69704 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69705 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69706 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69707 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69708 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69709 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69710 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69711 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69712 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69713 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69714 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69715 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			69716 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			69717 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69718 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69719 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69720 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69721 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69722 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69723 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69724 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69725 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69726 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69727 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69728 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69729 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69730 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69731 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69732 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69733 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69734 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69735 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69736 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69737 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69738 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69739 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69740 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69741 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69742 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69743 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69744 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69745 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69746 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69747 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69748 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69749 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69750 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69751 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69752 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69753 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69754 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69755 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69756 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69757 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69758 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69759 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69760 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69761 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69762 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69763 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69764 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69765 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69766 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69767 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69768 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69769 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69770 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69771 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69772 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69773 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69774 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69775 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69776 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69777 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69778 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69779 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69780 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69781 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69782 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69783 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69784 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69785 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69786 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69787 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69788 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69789 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69790 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69791 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69792 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69793 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69794 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69795 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69796 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69797 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69798 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69799 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69800 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69801 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69802 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69803 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69804 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69805 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69806 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69807 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69808 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69809 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69810 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69811 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69812 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69813 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69814 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69815 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69816 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69817 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69818 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69819 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69820 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69821 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69822 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69823 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69824 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69825 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69826 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69827 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69828 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69829 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69830 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69831 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69832 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69833 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69834 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69835 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69836 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69837 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69838 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69839 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69840 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69841 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69842 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69843 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69844 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69845 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69846 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69847 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69848 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69849 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69850 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69851 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69852 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69853 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69854 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69855 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69856 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69857 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69858 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69859 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69860 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69861 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69862 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69863 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69864 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69865 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69866 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69867 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69868 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69869 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69870 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69871 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69872 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69873 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69874 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69875 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69876 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69877 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69878 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69879 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69880 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69881 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69882 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69883 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69884 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69885 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69886 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69887 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69888 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			69889 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69890 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69891 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69892 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69893 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69894 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69895 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69896 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69897 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69898 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69899 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69900 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69901 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69902 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69903 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69904 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69905 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69906 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69907 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69908 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69909 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69910 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69911 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69912 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69913 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69914 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69915 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69916 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69917 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69918 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69919 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69920 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69921 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69922 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69923 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			69924 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			69925 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69926 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69927 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69928 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69929 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69930 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69931 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69932 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69933 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69934 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69935 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69936 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69937 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69938 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69939 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69940 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69941 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69942 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69943 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69944 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69945 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69946 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69947 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69948 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69949 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69950 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69951 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69952 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69953 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69954 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69955 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69956 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69957 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69958 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69959 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69960 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69961 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69962 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69963 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69964 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69965 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69966 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69967 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69968 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69969 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69970 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69971 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69972 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69973 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69974 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69975 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69976 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69977 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69978 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69979 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69980 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69981 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69982 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69983 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69984 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69985 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69986 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69987 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69988 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69989 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69990 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69991 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69992 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69993 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69994 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69995 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69996 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69997 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69998 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			69999 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
