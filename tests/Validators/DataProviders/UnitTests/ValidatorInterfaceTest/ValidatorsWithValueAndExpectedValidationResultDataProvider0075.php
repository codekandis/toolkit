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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0075 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			75000 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75001 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75002 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75003 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75004 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75005 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75006 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75007 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75008 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75009 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75010 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75011 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75012 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75013 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75014 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75015 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75016 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75017 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75018 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75019 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75020 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75021 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75022 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75023 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75024 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75025 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75026 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75027 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75028 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75029 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75030 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75031 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75032 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75033 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75034 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75035 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75036 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75037 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75038 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75039 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75040 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75041 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75042 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75043 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75044 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75045 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75046 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75047 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75048 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75049 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75050 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75051 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75052 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75053 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75054 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75055 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75056 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75057 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75058 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75059 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75060 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75061 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75062 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75063 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75064 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75065 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75066 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75067 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75068 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75069 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75070 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75071 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75072 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75073 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75074 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75075 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75076 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75077 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75078 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75079 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75080 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75081 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75082 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75083 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75084 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75085 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75086 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75087 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75088 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			75089 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75090 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75091 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75092 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75093 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75094 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75095 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75096 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75097 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75098 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75099 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75100 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75101 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75102 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75103 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75104 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75105 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75106 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75107 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75108 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75109 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75110 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75111 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75112 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75113 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75114 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75115 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75116 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75117 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75118 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75119 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75120 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75121 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75122 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75123 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75124 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75125 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75126 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75127 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75128 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75129 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75130 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75131 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75132 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75133 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75134 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75135 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75136 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75137 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75138 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75139 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75140 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75141 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75142 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75143 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75144 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75145 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75146 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75147 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75148 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75149 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75150 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75151 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75152 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75153 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75154 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75155 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75156 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75157 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75158 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75159 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75160 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75161 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75162 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75163 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75164 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75165 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75166 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75167 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			75168 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75169 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75170 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75171 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75172 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75173 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75174 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75175 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75176 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75177 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75178 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75179 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75180 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75181 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75182 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75183 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75184 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75185 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75186 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75187 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75188 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75189 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75190 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75191 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75192 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75193 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75194 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75195 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75196 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75197 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75198 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75199 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75200 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75201 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75202 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75203 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75204 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75205 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75206 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75207 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75208 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75209 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75210 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75211 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75212 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75213 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75214 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75215 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75216 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75217 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75218 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75219 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75220 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75221 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75222 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75223 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75224 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75225 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75226 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75227 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75228 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75229 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75230 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75231 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75232 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75233 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75234 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75235 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75236 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75237 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75238 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75239 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75240 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75241 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75242 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75243 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75244 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75245 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75246 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75247 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75248 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75249 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75250 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75251 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75252 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75253 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75254 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75255 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75256 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75257 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75258 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75259 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75260 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75261 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75262 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75263 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75264 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75265 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75266 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75267 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75268 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75269 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75270 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75271 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75272 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75273 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75274 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75275 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75276 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75277 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75278 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75279 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75280 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75281 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75282 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75283 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75284 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75285 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75286 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75287 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75288 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75289 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75290 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75291 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75292 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75293 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75294 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75295 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75296 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			75297 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75298 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75299 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75300 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75301 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75302 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75303 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75304 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75305 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75306 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75307 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75308 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75309 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75310 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75311 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75312 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75313 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75314 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75315 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75316 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75317 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75318 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75319 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75320 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75321 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75322 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75323 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75324 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75325 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75326 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75327 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75328 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75329 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75330 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75331 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75332 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75333 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75334 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75335 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75336 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75337 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75338 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75339 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75340 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75341 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75342 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75343 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75344 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75345 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75346 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75347 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75348 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75349 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75350 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75351 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75352 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75353 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75354 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75355 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75356 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75357 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75358 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75359 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75360 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75361 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75362 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75363 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75364 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75365 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75366 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75367 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75368 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75369 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75370 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75371 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75372 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75373 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75374 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75375 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75376 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			75377 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75378 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75379 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75380 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75381 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75382 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75383 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75384 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75385 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75386 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75387 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75388 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75389 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75390 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75391 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75392 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75393 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75394 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75395 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75396 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75397 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75398 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75399 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75400 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75401 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75402 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75403 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75404 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75405 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75406 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75407 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75408 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75409 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75410 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75411 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75412 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75413 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75414 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75415 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75416 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75417 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75418 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75419 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75420 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75421 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75422 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75423 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75424 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75425 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75426 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75427 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75428 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75429 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75430 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75431 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75432 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75433 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75434 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75435 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75436 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75437 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75438 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75439 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75440 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75441 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75442 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75443 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75444 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75445 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75446 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75447 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75448 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75449 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75450 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75451 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75452 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75453 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75454 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75455 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75456 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75457 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75458 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75459 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75460 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75461 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75462 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75463 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75464 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75465 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75466 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75467 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75468 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75469 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75470 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75471 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75472 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75473 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75474 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75475 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75476 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75477 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75478 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75479 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75480 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75481 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75482 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75483 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75484 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75485 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75486 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75487 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75488 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75489 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75490 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75491 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75492 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75493 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75494 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75495 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75496 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75497 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75498 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75499 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75500 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75501 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75502 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75503 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75504 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			75505 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75506 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75507 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75508 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75509 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75510 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75511 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75512 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75513 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75514 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75515 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75516 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75517 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75518 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75519 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75520 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75521 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75522 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75523 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75524 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75525 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75526 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75527 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75528 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75529 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75530 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75531 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75532 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75533 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75534 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75535 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75536 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75537 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75538 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75539 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75540 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75541 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75542 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75543 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75544 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75545 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75546 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75547 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75548 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75549 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75550 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75551 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75552 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75553 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75554 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75555 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75556 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75557 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75558 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75559 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75560 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75561 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75562 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75563 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75564 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75565 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75566 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75567 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75568 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75569 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75570 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75571 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75572 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75573 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75574 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75575 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75576 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75577 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75578 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75579 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75580 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75581 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75582 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75583 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			75584 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			75585 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75586 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75587 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75588 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75589 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75590 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75591 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75592 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75593 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75594 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75595 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75596 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75597 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75598 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75599 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75600 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75601 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75602 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75603 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75604 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75605 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75606 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75607 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75608 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75609 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75610 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75611 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75612 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75613 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75614 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75615 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75616 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75617 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75618 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75619 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75620 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75621 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75622 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75623 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75624 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75625 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75626 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75627 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75628 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75629 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75630 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75631 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75632 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75633 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75634 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75635 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75636 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75637 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75638 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75639 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75640 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75641 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75642 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75643 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75644 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75645 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75646 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75647 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75648 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75649 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75650 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75651 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75652 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75653 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75654 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75655 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75656 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75657 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75658 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75659 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75660 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75661 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75662 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75663 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75664 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75665 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75666 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75667 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75668 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75669 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75670 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75671 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75672 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75673 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75674 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75675 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75676 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75677 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75678 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75679 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75680 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75681 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75682 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75683 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75684 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75685 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75686 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75687 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75688 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75689 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75690 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75691 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75692 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75693 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75694 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75695 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75696 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75697 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75698 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75699 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75700 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75701 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75702 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75703 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75704 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75705 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75706 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75707 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75708 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75709 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75710 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75711 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75712 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			75713 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75714 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75715 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75716 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75717 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75718 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75719 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75720 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75721 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75722 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75723 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75724 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75725 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75726 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75727 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75728 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75729 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75730 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75731 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75732 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75733 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75734 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75735 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75736 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75737 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75738 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75739 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75740 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75741 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75742 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75743 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75744 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75745 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75746 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75747 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75748 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75749 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75750 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75751 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75752 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75753 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75754 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75755 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75756 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75757 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75758 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75759 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75760 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75761 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75762 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75763 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75764 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75765 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75766 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75767 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75768 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75769 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75770 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75771 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75772 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75773 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75774 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75775 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75776 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75777 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75778 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75779 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75780 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75781 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75782 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75783 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75784 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75785 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75786 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75787 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75788 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75789 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75790 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75791 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			75792 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			75793 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75794 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75795 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75796 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75797 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75798 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75799 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75800 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75801 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75802 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75803 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75804 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75805 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75806 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75807 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75808 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75809 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75810 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75811 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75812 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75813 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75814 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75815 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75816 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75817 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75818 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75819 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75820 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75821 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75822 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75823 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75824 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75825 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75826 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75827 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75828 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75829 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75830 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75831 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75832 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75833 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75834 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75835 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75836 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75837 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75838 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75839 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75840 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75841 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75842 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75843 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75844 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75845 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75846 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75847 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75848 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75849 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75850 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75851 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75852 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75853 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75854 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75855 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75856 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75857 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75858 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75859 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75860 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75861 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75862 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75863 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75864 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75865 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75866 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75867 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75868 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75869 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75870 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75871 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75872 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75873 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75874 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75875 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75876 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75877 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75878 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75879 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75880 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75881 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75882 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75883 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75884 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75885 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75886 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75887 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75888 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75889 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75890 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75891 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75892 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75893 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75894 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75895 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75896 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75897 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75898 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75899 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75900 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75901 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75902 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75903 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75904 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75905 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75906 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75907 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75908 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75909 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75910 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75911 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75912 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75913 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75914 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75915 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75916 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75917 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75918 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75919 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75920 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			75921 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75922 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75923 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75924 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75925 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75926 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75927 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75928 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75929 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75930 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75931 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75932 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75933 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75934 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75935 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75936 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75937 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75938 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75939 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75940 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75941 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75942 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75943 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75944 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75945 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75946 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75947 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75948 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75949 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75950 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75951 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75952 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75953 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75954 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75955 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75956 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75957 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75958 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75959 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75960 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75961 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75962 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75963 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75964 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75965 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75966 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75967 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75968 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75969 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75970 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75971 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75972 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75973 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75974 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75975 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75976 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75977 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75978 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75979 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75980 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75981 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75982 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75983 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75984 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75985 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75986 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75987 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75988 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75989 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75990 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75991 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75992 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75993 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75994 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75995 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75996 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75997 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75998 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			75999 => [
				'validator'                => new NullableIsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
