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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0070 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			70000 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70001 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70002 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70003 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70004 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70005 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70006 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70007 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70008 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70009 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70010 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70011 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70012 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70013 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70014 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70015 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70016 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70017 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70018 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70019 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70020 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70021 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70022 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70023 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70024 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70025 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70026 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70027 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70028 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70029 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70030 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70031 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70032 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70033 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70034 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70035 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70036 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70037 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70038 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70039 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70040 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70041 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70042 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70043 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70044 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70045 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70046 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70047 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70048 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70049 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70050 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70051 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70052 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70053 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70054 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70055 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70056 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70057 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70058 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70059 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70060 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70061 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70062 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70063 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70064 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70065 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70066 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70067 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70068 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70069 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70070 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70071 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70072 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70073 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70074 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70075 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70076 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70077 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70078 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70079 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70080 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70081 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70082 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70083 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70084 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70085 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70086 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70087 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70088 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70089 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70090 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70091 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70092 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70093 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70094 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70095 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70096 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			70097 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70098 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70099 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70100 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70101 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70102 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70103 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70104 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70105 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70106 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70107 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70108 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70109 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70110 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70111 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70112 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70113 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70114 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70115 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70116 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70117 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70118 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70119 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70120 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70121 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70122 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70123 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70124 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70125 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70126 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70127 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70128 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70129 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70130 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70131 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70132 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70133 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70134 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70135 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70136 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70137 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			70138 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70139 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70140 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70141 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70142 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70143 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70144 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70145 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70146 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70147 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70148 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70149 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70150 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70151 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70152 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70153 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70154 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70155 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70156 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70157 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70158 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70159 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70160 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70161 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70162 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70163 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70164 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70165 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70166 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70167 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70168 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70169 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70170 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70171 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70172 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70173 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70174 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70175 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70176 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70177 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70178 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70179 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70180 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70181 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70182 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70183 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70184 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70185 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70186 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70187 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70188 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70189 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70190 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70191 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70192 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70193 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70194 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70195 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70196 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70197 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70198 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70199 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70200 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70201 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70202 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70203 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70204 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70205 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70206 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70207 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70208 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70209 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70210 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70211 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70212 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70213 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70214 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70215 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70216 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70217 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70218 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70219 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70220 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70221 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70222 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70223 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70224 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70225 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70226 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70227 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70228 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70229 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70230 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70231 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70232 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70233 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70234 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70235 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70236 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70237 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70238 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70239 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70240 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70241 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70242 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70243 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70244 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70245 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70246 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70247 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70248 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70249 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70250 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70251 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70252 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70253 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70254 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70255 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70256 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70257 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70258 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70259 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70260 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70261 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70262 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70263 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70264 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70265 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70266 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70267 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70268 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70269 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70270 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70271 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70272 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70273 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70274 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70275 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70276 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70277 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70278 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70279 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70280 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70281 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70282 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70283 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70284 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70285 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70286 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70287 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70288 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70289 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70290 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70291 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70292 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70293 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70294 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70295 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70296 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70297 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70298 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70299 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70300 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70301 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70302 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70303 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70304 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			70305 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70306 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70307 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70308 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70309 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70310 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70311 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70312 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70313 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70314 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70315 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70316 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70317 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70318 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70319 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70320 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70321 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70322 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70323 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70324 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70325 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70326 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70327 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70328 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70329 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70330 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70331 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70332 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70333 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70334 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70335 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70336 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70337 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70338 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70339 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70340 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70341 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70342 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70343 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70344 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70345 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70346 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			70347 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70348 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70349 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70350 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70351 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70352 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70353 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70354 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70355 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70356 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70357 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70358 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70359 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70360 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70361 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70362 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70363 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70364 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70365 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70366 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70367 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70368 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70369 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70370 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70371 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70372 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70373 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70374 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70375 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70376 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70377 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70378 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70379 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70380 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70381 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70382 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70383 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70384 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70385 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70386 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70387 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70388 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70389 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70390 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70391 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70392 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70393 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70394 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70395 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70396 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70397 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70398 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70399 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70400 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70401 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70402 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70403 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70404 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70405 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70406 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70407 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70408 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70409 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70410 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70411 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70412 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70413 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70414 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70415 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70416 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70417 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70418 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70419 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70420 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70421 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70422 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70423 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70424 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70425 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70426 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70427 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70428 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70429 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70430 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70431 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70432 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70433 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70434 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70435 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70436 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70437 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70438 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70439 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70440 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70441 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70442 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70443 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70444 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70445 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70446 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70447 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70448 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70449 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70450 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70451 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70452 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70453 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70454 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70455 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70456 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70457 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70458 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70459 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70460 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70461 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70462 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70463 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70464 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70465 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70466 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70467 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70468 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70469 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70470 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70471 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70472 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70473 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70474 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70475 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70476 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70477 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70478 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70479 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70480 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70481 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70482 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70483 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70484 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70485 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70486 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70487 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70488 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70489 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70490 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70491 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70492 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70493 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70494 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70495 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70496 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70497 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70498 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70499 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70500 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70501 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70502 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70503 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70504 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70505 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70506 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70507 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70508 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70509 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70510 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70511 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70512 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			70513 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70514 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70515 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70516 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70517 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70518 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70519 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70520 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70521 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70522 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70523 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70524 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70525 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70526 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70527 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70528 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70529 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70530 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70531 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70532 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70533 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70534 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70535 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70536 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70537 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70538 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70539 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70540 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70541 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70542 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70543 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70544 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70545 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70546 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70547 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70548 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70549 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70550 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70551 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70552 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70553 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			70554 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			70555 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70556 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70557 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70558 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70559 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70560 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70561 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70562 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70563 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70564 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70565 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70566 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70567 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70568 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70569 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70570 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70571 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70572 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70573 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70574 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70575 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70576 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70577 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70578 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70579 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70580 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70581 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70582 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70583 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70584 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70585 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70586 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70587 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70588 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70589 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70590 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70591 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70592 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70593 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70594 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70595 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70596 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70597 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70598 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70599 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70600 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70601 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70602 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70603 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70604 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70605 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70606 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70607 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70608 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70609 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70610 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70611 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70612 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70613 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70614 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70615 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70616 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70617 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70618 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70619 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70620 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70621 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70622 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70623 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70624 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70625 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70626 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70627 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70628 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70629 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70630 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70631 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70632 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70633 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70634 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70635 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70636 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70637 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70638 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70639 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70640 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70641 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70642 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70643 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70644 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70645 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70646 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70647 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70648 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70649 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70650 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70651 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70652 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70653 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70654 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70655 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70656 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70657 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70658 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70659 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70660 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70661 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70662 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70663 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70664 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70665 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70666 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70667 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70668 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70669 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70670 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70671 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70672 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70673 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70674 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70675 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70676 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70677 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70678 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70679 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70680 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70681 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70682 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70683 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70684 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70685 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70686 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70687 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70688 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70689 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70690 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70691 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70692 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70693 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70694 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70695 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70696 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70697 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70698 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70699 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70700 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70701 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70702 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70703 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70704 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70705 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70706 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70707 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70708 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70709 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70710 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70711 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70712 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70713 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70714 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70715 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70716 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70717 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70718 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70719 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70720 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			70721 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70722 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70723 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70724 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70725 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70726 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70727 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70728 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70729 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70730 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70731 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70732 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70733 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70734 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70735 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70736 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70737 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70738 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70739 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70740 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70741 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70742 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70743 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70744 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70745 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70746 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70747 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70748 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70749 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70750 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70751 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70752 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70753 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70754 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70755 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70756 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70757 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70758 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70759 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70760 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70761 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			70762 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			70763 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70764 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70765 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70766 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70767 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70768 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70769 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70770 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70771 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70772 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70773 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70774 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70775 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70776 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70777 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70778 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70779 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70780 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70781 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70782 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70783 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70784 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70785 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70786 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70787 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70788 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70789 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70790 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70791 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70792 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70793 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70794 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70795 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70796 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70797 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70798 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70799 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70800 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70801 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70802 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70803 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70804 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70805 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70806 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70807 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70808 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70809 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70810 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70811 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70812 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70813 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70814 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70815 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70816 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70817 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70818 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70819 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70820 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70821 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70822 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70823 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70824 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70825 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70826 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70827 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70828 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70829 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70830 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70831 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70832 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70833 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70834 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70835 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70836 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70837 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70838 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70839 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70840 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70841 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70842 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70843 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70844 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70845 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70846 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70847 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70848 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70849 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70850 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70851 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70852 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70853 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70854 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70855 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70856 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70857 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70858 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70859 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70860 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70861 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70862 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70863 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70864 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70865 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70866 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70867 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70868 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70869 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70870 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70871 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70872 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70873 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70874 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70875 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70876 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70877 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70878 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70879 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70880 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70881 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70882 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70883 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70884 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70885 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70886 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70887 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70888 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70889 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70890 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70891 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70892 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70893 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70894 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70895 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70896 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70897 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70898 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70899 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70900 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70901 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70902 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70903 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70904 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70905 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70906 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70907 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70908 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70909 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70910 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70911 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70912 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70913 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70914 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70915 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70916 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70917 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70918 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70919 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70920 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70921 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70922 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70923 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70924 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70925 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70926 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70927 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTEGER_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70928 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			70929 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70930 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70931 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70932 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70933 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70934 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70935 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70936 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70937 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70938 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70939 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70940 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70941 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70942 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70943 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70944 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70945 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70946 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70947 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70948 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70949 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70950 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70951 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70952 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70953 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70954 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70955 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70956 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70957 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70958 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70959 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70960 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70961 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70962 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70963 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70964 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70965 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70966 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70967 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70968 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70969 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70970 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70971 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70972 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70973 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70974 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70975 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			70976 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70977 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70978 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70979 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70980 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70981 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70982 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70983 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70984 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70985 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70986 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70987 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70988 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70989 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70990 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70991 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70992 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70993 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70994 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70995 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70996 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70997 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70998 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			70999 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
