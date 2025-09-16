<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsFloatValidator;
use CodeKandis\ToolKit\Validators\IsInArrayValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0008 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			8000 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8001 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8002 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8003 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8004 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8005 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8006 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8007 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8008 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8009 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8010 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8011 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8012 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8013 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8014 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8015 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8016 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8017 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8018 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8019 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8020 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8021 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8022 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8023 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8024 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8025 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8026 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8027 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8028 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8029 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8030 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8031 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8032 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8033 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8034 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8035 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8036 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8037 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8038 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8039 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8040 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8041 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8042 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8043 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8044 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8045 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8046 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8047 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8048 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8049 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8050 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8051 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8052 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8053 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8054 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8055 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8056 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8057 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8058 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8059 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8060 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8061 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8062 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8063 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8064 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8065 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8066 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8067 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8068 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8069 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8070 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8071 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8072 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8073 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8074 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8075 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8076 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8077 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8078 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8079 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8080 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8081 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8082 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8083 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8084 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8085 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8086 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8087 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8088 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8089 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8090 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8091 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8092 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8093 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8094 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8095 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8096 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8097 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8098 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8099 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8100 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8101 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8102 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8103 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8104 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8105 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8106 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8107 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8108 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8109 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8110 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8111 => [
				'validator'                => new IsFloatValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8112 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			8113 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8114 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8115 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8116 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8117 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8118 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8119 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8120 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8121 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8122 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8123 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8124 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8125 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8126 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8127 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8128 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8129 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8130 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8131 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8132 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8133 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8134 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8135 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8136 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8137 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8138 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8139 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8140 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8141 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8142 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8143 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8144 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8145 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8146 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8147 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8148 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8149 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8150 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8151 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8152 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8153 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8154 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8155 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8156 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8157 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8158 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8159 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8160 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8161 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8162 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8163 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8164 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8165 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8166 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8167 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8168 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8169 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8170 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8171 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8172 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8173 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8174 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8175 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8176 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8177 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8178 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8179 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8180 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8181 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8182 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8183 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8184 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8185 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8186 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8187 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8188 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8189 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8190 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8191 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8192 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8193 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8194 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8195 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8196 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8197 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8198 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8199 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8200 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8201 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8202 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8203 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8204 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8205 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8206 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8207 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8208 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8209 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8210 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8211 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8212 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8213 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8214 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8215 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8216 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8217 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8218 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8219 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8220 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8221 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8222 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8223 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8224 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8225 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8226 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8227 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8228 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8229 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8230 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8231 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8232 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8233 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8234 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8235 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8236 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8237 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8238 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8239 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8240 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8241 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8242 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8243 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8244 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8245 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8246 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8247 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8248 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8249 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8250 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8251 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8252 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8253 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8254 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8255 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8256 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8257 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8258 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8259 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8260 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8261 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8262 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8263 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8264 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8265 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8266 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8267 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8268 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8269 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8270 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8271 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8272 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8273 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8274 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8275 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8276 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8277 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8278 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8279 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8280 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8281 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8282 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8283 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8284 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8285 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8286 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8287 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8288 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8289 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8290 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8291 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8292 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8293 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8294 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8295 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8296 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8297 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8298 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8299 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8300 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8301 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8302 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8303 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8304 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8305 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8306 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8307 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8308 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8309 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8310 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8311 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8312 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8313 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8314 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8315 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8316 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8317 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8318 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8319 => [
				'validator'                => new IsInArrayValidator( Values::NULL_ARRAY ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8320 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8321 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8322 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			8323 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8324 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8325 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8326 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8327 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8328 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8329 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8330 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8331 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8332 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8333 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8334 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8335 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8336 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8337 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8338 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8339 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8340 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8341 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8342 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8343 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8344 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8345 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8346 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8347 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8348 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8349 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8350 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8351 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8352 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8353 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8354 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8355 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8356 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8357 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8358 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8359 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8360 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8361 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8362 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8363 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8364 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8365 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8366 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8367 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8368 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8369 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8370 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8371 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8372 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8373 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8374 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8375 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8376 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8377 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8378 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8379 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8380 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8381 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8382 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8383 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8384 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8385 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8386 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8387 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8388 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8389 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8390 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8391 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8392 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8393 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8394 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8395 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8396 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8397 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8398 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8399 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8400 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8401 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8402 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8403 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8404 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8405 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8406 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8407 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8408 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8409 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8410 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8411 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8412 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8413 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8414 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8415 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8416 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8417 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8418 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8419 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8420 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8421 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8422 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8423 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8424 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8425 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8426 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8427 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8428 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8429 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8430 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8431 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8432 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8433 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8434 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8435 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8436 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8437 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8438 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8439 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8440 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8441 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8442 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8443 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8444 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8445 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8446 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8447 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8448 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8449 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8450 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8451 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8452 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8453 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8454 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8455 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8456 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8457 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8458 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8459 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8460 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8461 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8462 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8463 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8464 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8465 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8466 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8467 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8468 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8469 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8470 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8471 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8472 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8473 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8474 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8475 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8476 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8477 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8478 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8479 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8480 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8481 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8482 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8483 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8484 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8485 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8486 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8487 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8488 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8489 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8490 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8491 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8492 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8493 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8494 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8495 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8496 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8497 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8498 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8499 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8500 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8501 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8502 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8503 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8504 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8505 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8506 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8507 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8508 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8509 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8510 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8511 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8512 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8513 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8514 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8515 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8516 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8517 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8518 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8519 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8520 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8521 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8522 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8523 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8524 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8525 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8526 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8527 => [
				'validator'                => new IsInArrayValidator( Values::NULL_STRING_ARRAY ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8528 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8529 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8530 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8531 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8532 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8533 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			8534 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8535 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8536 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8537 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8538 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8539 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8540 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8541 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8542 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8543 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8544 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8545 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8546 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8547 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8548 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8549 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8550 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8551 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8552 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8553 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8554 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8555 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8556 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8557 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8558 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8559 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8560 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8561 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8562 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8563 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8564 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8565 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8566 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8567 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8568 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8569 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8570 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8571 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8572 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8573 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8574 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8575 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8576 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8577 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8578 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8579 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8580 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8581 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8582 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8583 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8584 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8585 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8586 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8587 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8588 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8589 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8590 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8591 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8592 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8593 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8594 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8595 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8596 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8597 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8598 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8599 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8600 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8601 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8602 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8603 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8604 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8605 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8606 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8607 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8608 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8609 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8610 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8611 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8612 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8613 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8614 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8615 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8616 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8617 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8618 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8619 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8620 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8621 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8622 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8623 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8624 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8625 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8626 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8627 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8628 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8629 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8630 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8631 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8632 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8633 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8634 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8635 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8636 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8637 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8638 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8639 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8640 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8641 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8642 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8643 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8644 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8645 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8646 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8647 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8648 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8649 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8650 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8651 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8652 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8653 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8654 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8655 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8656 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8657 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8658 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8659 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8660 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8661 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8662 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8663 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8664 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8665 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8666 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8667 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8668 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8669 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8670 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8671 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8672 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8673 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8674 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8675 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8676 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8677 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8678 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8679 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8680 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8681 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8682 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8683 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8684 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8685 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8686 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8687 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8688 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8689 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8690 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8691 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8692 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8693 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8694 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8695 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8696 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8697 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8698 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8699 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8700 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8701 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8702 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8703 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8704 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8705 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8706 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8707 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8708 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8709 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8710 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8711 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8712 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8713 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8714 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8715 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8716 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8717 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8718 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8719 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8720 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8721 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8722 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8723 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8724 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8725 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8726 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8727 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8728 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8729 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8730 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8731 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8732 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8733 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8734 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8735 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8736 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8737 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8738 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8739 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8740 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8741 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8742 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			8743 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8744 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8745 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8746 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8747 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8748 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8749 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8750 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8751 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8752 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8753 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8754 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8755 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8756 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8757 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8758 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8759 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8760 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8761 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8762 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8763 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8764 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8765 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8766 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8767 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8768 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8769 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8770 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8771 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8772 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8773 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8774 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8775 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8776 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8777 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8778 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8779 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8780 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8781 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8782 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8783 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8784 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8785 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8786 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8787 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8788 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8789 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8790 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8791 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8792 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8793 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8794 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8795 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8796 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8797 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8798 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8799 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8800 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8801 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8802 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8803 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8804 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8805 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8806 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8807 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8808 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8809 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8810 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8811 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8812 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8813 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8814 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8815 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8816 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8817 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8818 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8819 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8820 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8821 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8822 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8823 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8824 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8825 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8826 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8827 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8828 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8829 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8830 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8831 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8832 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8833 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8834 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8835 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8836 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8837 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8838 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8839 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8840 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8841 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8842 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8843 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8844 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8845 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8846 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8847 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8848 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8849 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8850 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8851 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8852 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8853 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8854 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8855 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8856 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8857 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8858 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8859 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8860 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8861 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8862 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8863 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8864 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8865 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8866 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8867 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8868 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8869 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8870 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8871 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8872 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8873 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8874 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8875 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8876 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8877 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8878 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8879 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8880 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8881 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8882 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8883 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8884 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8885 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8886 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8887 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8888 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8889 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8890 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8891 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8892 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8893 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8894 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8895 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8896 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8897 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8898 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8899 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8900 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8901 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8902 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8903 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8904 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8905 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8906 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8907 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8908 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8909 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8910 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8911 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8912 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8913 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8914 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8915 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8916 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8917 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8918 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8919 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8920 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8921 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8922 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8923 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8924 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8925 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8926 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8927 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8928 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8929 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8930 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8931 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8932 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8933 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8934 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8935 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8936 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8937 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8938 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8939 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8940 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8941 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8942 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8943 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8944 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8945 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8946 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8947 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8948 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8949 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			8950 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			8951 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8952 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8953 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8954 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8955 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8956 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8957 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8958 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8959 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8960 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8961 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8962 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8963 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8964 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8965 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8966 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8967 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8968 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8969 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8970 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8971 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8972 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8973 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8974 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8975 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8976 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8977 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8978 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8979 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8980 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8981 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8982 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8983 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8984 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8985 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8986 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8987 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8988 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8989 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8990 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8991 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8992 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8993 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8994 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8995 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8996 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8997 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8998 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			8999 => [
				'validator'                => new IsInArrayValidator( Values::BOOLEAN_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
