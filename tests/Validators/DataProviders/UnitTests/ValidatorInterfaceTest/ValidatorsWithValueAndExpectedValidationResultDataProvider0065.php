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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0065 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			65000 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65001 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65002 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65003 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65004 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65005 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65006 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65007 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65008 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65009 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65010 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65011 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65012 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65013 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65014 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65015 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65016 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65017 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65018 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65019 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65020 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65021 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65022 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65023 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65024 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65025 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65026 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65027 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65028 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65029 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65030 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65031 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65032 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65033 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65034 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65035 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65036 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65037 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65038 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65039 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65040 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65041 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65042 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65043 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65044 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65045 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65046 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65047 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65048 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65049 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65050 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65051 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65052 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65053 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65054 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65055 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65056 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65057 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65058 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65059 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65060 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65061 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65062 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65063 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65064 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65065 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65066 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65067 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65068 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65069 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65070 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65071 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65072 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65073 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65074 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65075 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65076 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65077 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65078 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65079 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65080 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65081 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65082 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65083 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65084 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65085 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65086 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65087 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65088 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65089 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65090 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65091 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65092 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65093 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65094 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65095 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65096 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65097 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65098 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65099 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65100 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65101 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65102 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65103 => [
				'validator'                => new NullableIsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65104 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			65105 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65106 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65107 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65108 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65109 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			65110 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65111 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65112 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65113 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65114 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65115 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65116 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65117 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65118 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65119 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65120 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65121 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65122 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65123 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65124 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65125 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65126 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65127 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65128 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65129 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65130 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65131 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65132 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65133 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65134 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65135 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65136 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65137 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65138 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65139 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65140 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65141 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65142 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65143 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65144 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65145 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65146 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65147 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65148 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65149 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65150 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65151 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65152 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65153 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65154 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65155 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65156 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65157 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65158 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65159 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65160 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65161 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65162 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65163 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65164 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65165 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65166 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65167 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65168 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65169 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65170 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65171 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65172 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65173 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65174 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65175 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65176 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65177 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65178 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65179 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65180 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65181 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65182 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65183 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65184 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65185 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65186 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65187 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65188 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65189 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65190 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65191 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65192 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65193 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65194 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65195 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65196 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65197 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65198 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65199 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65200 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65201 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65202 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65203 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65204 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65205 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65206 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65207 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65208 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65209 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65210 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65211 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65212 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65213 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65214 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65215 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65216 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65217 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65218 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65219 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65220 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65221 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65222 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65223 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65224 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65225 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65226 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65227 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65228 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65229 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65230 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65231 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65232 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65233 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65234 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65235 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65236 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65237 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65238 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65239 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65240 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65241 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65242 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65243 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65244 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65245 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65246 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65247 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65248 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65249 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65250 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65251 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65252 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65253 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65254 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65255 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65256 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65257 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65258 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65259 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65260 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65261 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65262 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65263 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65264 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65265 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65266 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65267 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65268 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65269 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65270 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65271 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65272 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65273 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65274 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65275 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65276 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65277 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65278 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65279 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65280 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65281 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65282 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65283 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65284 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65285 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65286 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65287 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65288 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65289 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65290 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65291 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65292 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65293 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65294 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65295 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65296 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65297 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65298 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65299 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65300 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65301 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65302 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65303 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65304 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65305 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65306 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65307 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65308 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65309 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65310 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65311 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65312 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			65313 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65314 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65315 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65316 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65317 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65318 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			65319 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65320 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65321 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65322 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65323 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65324 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65325 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65326 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65327 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65328 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65329 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65330 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65331 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65332 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65333 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65334 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65335 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65336 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65337 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65338 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65339 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65340 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65341 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65342 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65343 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65344 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65345 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65346 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65347 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65348 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65349 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65350 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65351 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65352 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65353 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65354 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65355 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65356 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65357 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65358 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65359 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65360 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65361 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65362 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65363 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65364 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65365 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65366 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65367 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65368 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65369 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65370 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65371 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65372 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65373 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65374 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65375 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65376 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65377 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65378 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65379 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65380 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65381 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65382 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65383 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65384 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65385 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65386 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65387 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65388 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65389 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65390 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65391 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65392 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65393 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65394 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65395 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65396 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65397 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65398 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65399 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65400 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65401 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65402 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65403 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65404 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65405 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65406 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65407 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65408 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65409 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65410 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65411 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65412 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65413 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65414 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65415 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65416 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65417 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65418 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65419 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65420 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65421 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65422 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65423 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65424 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65425 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65426 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65427 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65428 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65429 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65430 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65431 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65432 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65433 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65434 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65435 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65436 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65437 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65438 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65439 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65440 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65441 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65442 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65443 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65444 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65445 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65446 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65447 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65448 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65449 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65450 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65451 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65452 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65453 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65454 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65455 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65456 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65457 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65458 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65459 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65460 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65461 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65462 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65463 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65464 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65465 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65466 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65467 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65468 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65469 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65470 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65471 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65472 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65473 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65474 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65475 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65476 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65477 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65478 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65479 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65480 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65481 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65482 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65483 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65484 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65485 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65486 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65487 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65488 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65489 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65490 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65491 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65492 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65493 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65494 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65495 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65496 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65497 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65498 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65499 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65500 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65501 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65502 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65503 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65504 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65505 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65506 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65507 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65508 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65509 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65510 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65511 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65512 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65513 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65514 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65515 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65516 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65517 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65518 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65519 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65520 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			65521 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65522 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65523 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65524 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65525 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			65526 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			65527 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65528 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65529 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65530 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65531 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65532 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65533 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65534 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65535 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65536 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65537 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65538 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65539 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65540 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65541 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65542 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65543 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65544 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65545 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65546 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65547 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65548 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65549 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65550 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65551 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65552 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65553 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65554 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65555 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65556 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65557 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65558 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65559 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65560 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65561 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65562 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65563 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65564 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65565 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65566 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65567 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65568 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65569 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65570 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65571 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65572 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65573 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65574 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65575 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65576 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65577 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65578 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65579 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65580 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65581 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65582 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65583 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65584 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65585 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65586 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65587 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65588 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65589 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65590 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65591 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65592 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65593 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65594 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65595 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65596 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65597 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65598 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65599 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65600 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65601 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65602 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65603 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65604 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65605 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65606 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65607 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65608 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65609 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65610 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65611 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65612 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65613 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65614 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65615 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65616 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65617 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65618 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65619 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65620 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65621 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65622 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65623 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65624 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65625 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65626 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65627 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65628 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65629 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65630 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65631 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65632 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65633 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65634 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65635 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65636 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65637 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65638 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65639 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65640 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65641 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65642 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65643 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65644 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65645 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65646 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65647 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65648 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65649 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65650 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65651 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65652 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65653 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65654 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65655 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65656 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65657 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65658 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65659 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65660 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65661 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65662 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65663 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65664 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65665 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65666 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65667 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65668 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65669 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65670 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65671 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65672 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65673 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65674 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65675 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65676 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65677 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65678 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65679 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65680 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65681 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65682 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65683 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65684 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65685 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65686 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65687 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65688 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65689 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65690 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65691 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65692 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65693 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65694 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65695 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65696 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65697 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65698 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65699 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65700 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65701 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65702 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65703 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65704 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65705 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65706 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65707 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65708 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65709 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65710 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65711 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65712 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65713 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65714 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65715 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65716 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65717 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65718 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65719 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65720 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65721 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65722 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65723 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65724 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65725 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65726 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65727 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65728 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			65729 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65730 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65731 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65732 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65733 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			65734 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			65735 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65736 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65737 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65738 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65739 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65740 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65741 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65742 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65743 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65744 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65745 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65746 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65747 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65748 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65749 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65750 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65751 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65752 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65753 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65754 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65755 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65756 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65757 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65758 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65759 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65760 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65761 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65762 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65763 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65764 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65765 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65766 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65767 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65768 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65769 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65770 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65771 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65772 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65773 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65774 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65775 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65776 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65777 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65778 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65779 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65780 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65781 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65782 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65783 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65784 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65785 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65786 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65787 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65788 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65789 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65790 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65791 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65792 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65793 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65794 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65795 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65796 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65797 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65798 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65799 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65800 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65801 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65802 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65803 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65804 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65805 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65806 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65807 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65808 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65809 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65810 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65811 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65812 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65813 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65814 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65815 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65816 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65817 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65818 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65819 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65820 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65821 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65822 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65823 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65824 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65825 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65826 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65827 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65828 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65829 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65830 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65831 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65832 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65833 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65834 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65835 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65836 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65837 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65838 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65839 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65840 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65841 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65842 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65843 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65844 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65845 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65846 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65847 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65848 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65849 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65850 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65851 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65852 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65853 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65854 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65855 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65856 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65857 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65858 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65859 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65860 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65861 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65862 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65863 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65864 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65865 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65866 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65867 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65868 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65869 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65870 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65871 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65872 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65873 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65874 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65875 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65876 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65877 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65878 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65879 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65880 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65881 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65882 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65883 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65884 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65885 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65886 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65887 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65888 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65889 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65890 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65891 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65892 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65893 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65894 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65895 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65896 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65897 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65898 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65899 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65900 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65901 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65902 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65903 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65904 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65905 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65906 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65907 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65908 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65909 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65910 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65911 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65912 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65913 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65914 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65915 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65916 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65917 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65918 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65919 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65920 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65921 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65922 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65923 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65924 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65925 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65926 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65927 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65928 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65929 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65930 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65931 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65932 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65933 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65934 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65935 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65936 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			65937 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65938 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65939 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65940 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65941 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65942 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65943 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65944 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65945 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65946 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65947 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			65948 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65949 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65950 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65951 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65952 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65953 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65954 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65955 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65956 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65957 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65958 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65959 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65960 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65961 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65962 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65963 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65964 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65965 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65966 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65967 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65968 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65969 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65970 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65971 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65972 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65973 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65974 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65975 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65976 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65977 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65978 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65979 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65980 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65981 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65982 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65983 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65984 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65985 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65986 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65987 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65988 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65989 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65990 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65991 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65992 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65993 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65994 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65995 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65996 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65997 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65998 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			65999 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
